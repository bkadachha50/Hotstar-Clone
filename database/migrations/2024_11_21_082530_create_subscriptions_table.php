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
            $table->unsignedBigInteger('user_id');       // Link to user
            $table->string('plan_name');                // Name of the subscription plan
            $table->decimal('amount', 8, 2);            // Plan cost
            $table->string('payment_id');               // Razorpay payment ID
            $table->string('order_id');                 // Razorpay order ID
            $table->date('subscription_date');          // Start date
            $table->date('expiry_date');                // End date
            $table->timestamps();                       // Laravel timestamps

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
