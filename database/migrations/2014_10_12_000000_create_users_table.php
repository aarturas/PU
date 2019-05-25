<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {

            $table->bigIncrements('id');
     //              turime pasirinkti 'tipa', ar bus, pvz.: studentas-2, ar destytojas-1
            $table->tinyInteger('tipa');
            $table->string('name');
            $table->string('surname',64);
            $table->string('email')->unique();
        //  $table->timestamp('email_verified_at')->nullable();
            $table->string('phone',24);
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
