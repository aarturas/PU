<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKursaisTable extends Migration
{
   
    public function up()
    {
        Schema::create('kursais', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',64);
            $table->timestamps();
        });
    }


  
    public function down()
    {
        Schema::dropIfExists('kursais');
    }
}
