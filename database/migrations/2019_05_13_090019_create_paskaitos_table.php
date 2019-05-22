<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaskaitosTable extends Migration
{
   
    public function up()
    {
        Schema::create('paskaitos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('grupe_id');
            $table->foreign('grupe_id')->references('id')->on('grupes');
            // $table->timestamp('added_on');
            $table->text('data')->nullable();
            $table->string('pavadinimas',64);
            $table->text('aprasas',255);
            $table->timestamps();
        });
    }

    


    public function down()
    {
        Schema::dropIfExists('paskaitos');
    }
}
