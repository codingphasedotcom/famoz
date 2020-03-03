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
            $table->string('title');
            $table->text('slug')->nullable();
            $table->bigInteger('post_type_id')->nullable()->index();
            $table->bigInteger('user_id')->nullable()->index();
            $table->bigInteger('views')->nullable()->default(0);
            $table->longText('description')->nullable();
            $table->text('image_url')->nullable();
            $table->text('youtube_id')->nullable();
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
