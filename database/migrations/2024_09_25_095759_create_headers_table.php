<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHeadersTable extends Migration
{
    public function up()
    {
        Schema::create('headers', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // The title of the series
            $table->string('seasons'); // Number of seasons
            $table->text('description'); // Description of the series
            $table->string('type'); // Genres (Action, Fantasy, etc.)
            $table->string('background_image'); // Path to the background image
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('headers');
    }
}
