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
            
            $table->string('supcatagoryname');
            $table->string('supcatagoryimage');
            $table->string('supcatagory_meta_tag');
            $table->string('supcatagory_status');
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
        Schema::dropIfExists('super_catagories');
    }
}
