<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFailaisTable extends Migration
{
    
    public function up()
    {
        Schema::create('failais', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('paskaito_id');
            $table->foreign('paskaito_id')->references('id')->on('paskaitos');
            $table->string('file',64);
            $table->string('name',120);
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('failais');
    }
}
