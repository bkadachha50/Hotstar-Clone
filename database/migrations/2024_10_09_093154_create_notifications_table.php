<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotificationsTable extends Migration
{
    public function up()
    {
        Schema::create('notifications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->string('type'); // 'movie' or 'subscription'
            $table->string('title'); // Notification title
            $table->text('description')->nullable();
            $table->string('image')->nullable(); // Optional image (e.g., movie poster)
            $table->boolean('is_read')->default(false); // Mark notification as read
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('notifications');
    }
}
