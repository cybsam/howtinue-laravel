<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubCatagoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_catagories', function (Blueprint $table) {
            $table->id();
            $table->integer('catagory_status')->default(0);
            $table->integer('supcataid');
            $table->string('supcataname');
            $table->string('subcatagoryname')->unique();
            $table->string('subcatagorymetatag');
            $table->string('subcataimage');
            $table->integer('userid');
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
        Schema::dropIfExists('sub_catagories');
    }
}
