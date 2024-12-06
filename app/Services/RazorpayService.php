<?php

namespace App\Services;

use Razorpay\Api\Api;
use Illuminate\Support\Facades\Log;

class RazorpayService
{
    protected $api;

    public function __construct()
    {
        $this->api = new Api(env('RAZORPAY_KEY_ID'), env('RAZORPAY_KEY_SECRET'));
    }

    public function createOrder($amount)
    {
        try {
            return $this->api->order->create([
                'receipt' => uniqid(),
                'amount' => $amount * 100, // Amount in paise
                'currency' => 'INR',
                'payment_capture' => 1,
            ]);
        } catch (\Exception $e) {
            Log::error('Failed to create Razorpay order.', ['error' => $e->getMessage()]);
            throw $e;
        }
    }

    public function verifyPaymentSignature($attributes)
    {
        $generatedSignature = hash_hmac(
            'sha256',
            $attributes['razorpay_order_id'] . '|' . $attributes['razorpay_payment_id'],
            env('RAZORPAY_KEY_SECRET')
        );

        return hash_equals($generatedSignature, $attributes['razorpay_signature']);
    }

    public function fetchPayment($paymentId)
    {
        try {
            return $this->api->payment->fetch($paymentId);
        } catch (\Exception $e) {
            Log::error('Failed to fetch payment details.', ['error' => $e->getMessage()]);
            throw $e;
        }
    }
}