<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGrupesTable extends Migration
{
   
    public function up()
    {
        Schema::create('grupes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('kursai_id');
            $table->unsignedBigInteger('destytoja_id');
            $table->foreign('kursai_id')->references('id')->on('kursais');
            $table->foreign('destytoja_id')->references('id')->on('users')->nullable();
            $table->string('name',64);
            $table->date('started_at');
            $table->date('finished_at');
            $table->timestamps();
        });
    }



    public function down()
    {
        Schema::dropIfExists('grupes');
    }
}
