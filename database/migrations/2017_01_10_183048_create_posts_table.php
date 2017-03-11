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
            $table->increments('id');
            $table->text('post_title');
            $table->text('post_address');
            $table->integer('category_id');
            $table->integer('user_id');
            $table->text('post_description');
            $table->string('post_latitude');
            $table->string('post_longitude');
            $table->tinyInteger('post_status');
            $table->text('featured_image');
            $table->text('post_tags');
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
