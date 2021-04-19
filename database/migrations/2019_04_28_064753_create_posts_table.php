<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('author_id');
            $table->integer('category_id');
            $table->string('title');
            $table->text('short_description');
            $table->longText('description');
            $table->text('image');
            $table->enum('is_featured',['Yes','No'])->default('No');
            $table->integer('total_hit')->default(0);
            $table->date('published_date');
            $table->enum('status',['published','unpublished'])->default('published');
            $table->enum('breaking_news',['yes','no'])->default('no');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
