<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembershipTable extends Migration
{
    public function up()
    {
        Schema::create('membership', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Plan name (e.g., Basic, Standard)
            $table->string('quality'); // Video quality (e.g., 720p, 1080p)
            $table->decimal('price', 8, 2); // Monthly price
            $table->string('access'); // Access information (e.g., 1 Member)
            $table->string('devices'); // Supported devices
            $table->string('resolution'); // Video resolution
            $table->string('video_sound_quality'); // Video and sound quality description
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('membership');
    }
}