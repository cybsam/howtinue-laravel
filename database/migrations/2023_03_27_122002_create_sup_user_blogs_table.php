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
            $table->string('blogShortDesc');
            $table->string('blogMeta');
            $table->string('category');
            $table->string('blogImage');
            
            $table->longText('description');
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
