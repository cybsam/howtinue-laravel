<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSupUserBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sup_user_blogs', function (Blueprint $table) {
            $table->id();
            $table->string('blog_name');
            $table->string('slug');
            $table->string('blog_short_desc');
            $table->string('blog_meta_title');
            $table->longText('blog_meta_description');
            $table->string('blog_meta_keyword');
            $table->string('category');
            $table->string('sub_category_name');
            $table->string('sub_category_slug');
            $table->string('blog_image');
            $table->string('super_category');
            $table->longText('description');
            $table->integer('post_status')->default(0);
            $table->string('userid');
            $table->string('username');

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
        Schema::dropIfExists('sup_user_blogs');
    }
}
