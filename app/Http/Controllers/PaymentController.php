<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Membership;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use App\Models\Notification;
use App\Mail\SubscriptionPurchased;
use App\Services\RazorpayService;

class PaymentController extends Controller
{
    protected $razorpay;

    public function __construct()
    {
        $this->razorpay = new RazorpayService();
    }

    public function payment(Request $request)
    {
        $subscriptionId = $request->input('sub');
        $subscription = Membership::find($subscriptionId);

        if (!$subscription) {
            return back()->withErrors('Invalid subscription plan.');
        }

        try {
            
            $order = $this->razorpay->createOrder($subscription->price);

            
            session([
                'razorpay_order_id' => $order->id,
                'subscription_id' => $subscription->id,
            ]);

            return view('payment', [
                'order' => $order,
                'subscription' => $subscription,
                'razorpay_key' => env('RAZORPAY_KEY_ID'),
            ]);
        } catch (\Exception $e) {
            Log::error('Failed to create Razorpay order.', ['error' => $e->getMessage()]);
            return back()->withErrors('Failed to initiate payment.');
        }
    }

    public function verifyPayment(Request $request)
    {
        $razorpayOrderId = session('razorpay_order_id');
        $subscriptionId = session('subscription_id');
    
        if (!$razorpayOrderId || !$subscriptionId) {
            return response()->json(['status' => 'failure', 'message' => 'Session expired.']);
        }
    
        try {
            // Verify Payment Signature
            $isValidSignature = $this->razorpay->verifyPaymentSignature($request->all());
            if (!$isValidSignature) {
                return response()->json(['status' => 'failure', 'message' => 'Invalid payment signature.']);
            }
    
            // Fetch payment details
            $payment = $this->razorpay->fetchPayment($request->razorpay_payment_id);
            if ($payment->status !== 'captured') {
                return response()->json(['status' => 'failure', 'message' => 'Payment not captured.']);
            }
    
            // Fetch subscription details
            $membership = Membership::find($subscriptionId);
            if (!$membership) {
                return response()->json(['status' => 'failure', 'message' => 'Invalid subscription plan.']);
            }
    
            // Check if subscription already exists for this order
            $existingSubscription = DB::table('subscriptions')
                ->where('order_id', $razorpayOrderId)
                ->first();
    
            if ($existingSubscription) {
                return response()->json(['status' => 'success', 'message' => 'Payment already processed.']);
            }
    
            // Save subscription in the database
            $subscription = DB::table('subscriptions')->insertGetId([
                'user_id' => auth()->id(),
                'plan_name' => $membership->name,
                'amount' => $membership->price,
                'payment_id' => $payment->id,
                'order_id' => $razorpayOrderId,
                'subscription_date' => now(),
                'expiry_date' => now()->addMonth(),
            ]);
    
            // Send notification email to the user
            $user = auth()->user();
            $details = [
                'name' => $user->name,
                'email' => $user->email,
                'plan_name' => $membership->name,
                'amount' => $membership->price,
                'expiry_date' => now()->addMonth()->toFormattedDateString(),
            ];

            Notification::create([
                'user_id' => $user->id,
                'type' => 'subscription',
                'title' => 'Subscription',
                'description' => "Enjoy {$membership->name} plan.",
                'image' => 'sub.webp', 
            ]);
    
            Mail::to($user->email)->send(new SubscriptionPurchased($details));
    
            return view('my_space');
        } catch (\Exception $e) {
            Log::error('Payment verification failed.', ['error' => $e->getMessage()]);
            return response()->json(['status' => 'failure', 'message' => 'Payment verification failed.']);
        }
    }    
}