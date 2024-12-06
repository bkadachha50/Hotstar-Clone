<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('subscriptions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // Foreign key for user
            $table->string('plan_name');          // Subscription plan name
            $table->decimal('amount', 8, 2);      // Subscription amount
            $table->string('payment_id');         // Razorpay payment ID
            $table->string('order_id');           // Razorpay order ID
            $table->date('subscription_date');    // Date of subscription
            $table->date('expiry_date');          // Expiry date
            $table->timestamps();

            // Foreign key relation
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subscriptions');
    }
};
