<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateNotificationsTable extends Migration
{
    public function up()
    {
        Schema::table('notifications', function (Blueprint $table) {
            // Add new columns
            $table->string('type')->after('user_id'); // 'movie' or 'subscription'
            $table->string('title')->after('type');
            $table->text('description')->nullable()->after('title');
            $table->string('image')->nullable()->after('description');

            // Drop old columns no longer needed
            $table->dropForeign(['movie_id']); // Remove foreign key constraint
            $table->dropColumn(['movie_id', 'movie_name', 'movie_description', 'movie_image']);
        });
    }

    public function down()
    {
        Schema::table('notifications', function (Blueprint $table) {
            // Revert changes by re-adding dropped columns
            $table->foreignId('movie_id')->nullable()->constrained('movies')->onDelete('cascade');
            $table->string('movie_name')->nullable();
            $table->text('movie_description')->nullable();
            $table->string('movie_image')->nullable();

            // Drop the newly added columns
            $table->dropColumn(['type', 'title', 'description', 'image']);
        });
    }
}
