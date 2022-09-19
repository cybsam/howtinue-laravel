<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersteamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usersteams', function (Blueprint $table) {
            $table->id();
            $table->string('teamname');
            
            $table->string('admin_name');
            $table->string('user_name');
            $table->string('user_email');
            $table->string('user_post_id');
            $table->integer('teamstatus')->default(0);
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
        Schema::dropIfExists('usersteams');
    }
}
