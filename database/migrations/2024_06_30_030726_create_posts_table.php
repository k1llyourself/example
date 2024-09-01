<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->foreignId('user_id')->constrained();
            $table->integer('category_id')->nullable();
            $table->string('title', 200);
            $table->text('content')->nullable();
            $table->string('price');
            $table->string('image_path')->nullable(); // Add this line for image storage

            $table->boolean('published')->default(true);
        });
    }

    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
