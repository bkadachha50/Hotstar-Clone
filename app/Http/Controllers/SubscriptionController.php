<?php

namespace App\Http\Controllers;

use App\Models\Subscription; // Ensure you have the correct model imported
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    // Display all subscriptions
    public function subcribe()
    {
        $subscription = Subscription::all();
        return view('subcribe', compact('subscription')); // Changed variable to match view
    }

    public function show(Subscription $subscription)
    {
        return view('subscription.show', compact('subscription'));
    }

    public function edit($id)
    {
        // Find the subscription by its ID
        $subscription = Subscription::findOrFail($id);
        
        // Return the edit view with the subscription data
        return view('edit_subcription', compact('subscription'));
    }
    
    public function update(Request $request, $id)
    {
        // Find the subscription by its ID
        $subscription = Subscription::findOrFail($id);
    
        // Validate the request data
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'plan_name' => 'required|string|max:255',
            'amount' => 'required|numeric',
            'subscription_date' => 'required|date',
            'expiry_date' => 'required|date',
        ]);
    
        // Update the subscription with validated data
        $subscription->update($validated);
    
        // Redirect to the subscriptions list with a success message
        return redirect()->route('subcribe')->with('success', 'Subscription updated successfully.');
    }    

    public function destroy($id)
{
    // Find the subscription by its ID
    $subscription = Subscription::findOrFail($id);
    
    // Delete the subscription
    $subscription->delete();

    // Redirect back to the subscriptions list with a success message
    return redirect()->route('subcribe')->with('success', 'Subscription deleted successfully.'); // Adjusted route name
}

}
