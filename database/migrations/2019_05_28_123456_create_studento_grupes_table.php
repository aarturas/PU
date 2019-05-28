<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentoGrupesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studento_grupes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('studento_id');
            $table->unsignedBigInteger('grupe_id');
            $table->foreign('studento_id')->references('id')->on('users');
            $table->foreign('grupe_id')->references('id')->on('grupes');
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
        Schema::dropIfExists('studento_grupes');
    }
}
