<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuperCatagoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('super_catagories', function (Blueprint $table) {
            $table->id();
            $table->string('slug');
            $table->string('supcatagoryname')->unique();
            $table->string('supcatagoryimage');
            $table->string('supcatagory_meta_tag')->unique();
            $table->string('supcatagory_status')->default(1);
            $table->integer('userid');
            $table->string('username');
            $table->integer('archive')->default(0);
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
        Schema::dropIfExists('super_catagories');
    }
}
