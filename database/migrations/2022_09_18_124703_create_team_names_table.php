<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamNamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('team_names', function (Blueprint $table) {
            $table->id();
            $table->string('teamname')->unique();
            
            $table->string('admin_name');
            $table->integer('admin_id');
            $table->string('admin_email');
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
        Schema::dropIfExists('team_names');
    }
}
