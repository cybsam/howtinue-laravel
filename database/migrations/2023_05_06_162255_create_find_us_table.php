<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFindUsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('find_us', function (Blueprint $table) {
            $table->id();
            $table->longText('facebook')->nullable();
            $table->longText('twitter')->nullable();
            $table->longText('whatsapp')->nullable();
            $table->longText('linkedin')->nullable();
            $table->longText('reddit')->nullable();
            $table->longText('telegram')->nullable();
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
        Schema::dropIfExists('find_us');
    }
}
