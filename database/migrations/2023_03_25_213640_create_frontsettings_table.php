<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFrontsettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('frontsettings', function (Blueprint $table) {
            $table->id();
            $table->string('websitename');
            $table->string('slug');
            $table->string('websitefaviconicon');
            $table->string('websitemainlogo');
            $table->string('websitefooterlogo');
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
        Schema::dropIfExists('frontsettings');
    }
}
