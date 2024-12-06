<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('watchlist', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');  // User reference
            $table->unsignedBigInteger('movie_id'); // Movie reference
            $table->timestamps();
    
            // Foreign key constraints
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('movie_id')->references('id')->on('movies')->onDelete('cascade');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('watchlist');
    }
    
};
