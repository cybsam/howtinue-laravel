<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersInfoAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_info_admins', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->text('about');
            $table->string('company');
            $table->string('jobtitle');
            $table->string('country');
            $table->string('address');
            $table->string('phone');
            $table->string('twitter');
            $table->string('facebook');
            $table->string('instagram');
            $table->string('linkedin');
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
        Schema::dropIfExists('users_info_admins');
    }
}
