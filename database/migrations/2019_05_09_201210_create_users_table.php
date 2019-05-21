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
            $table->unsignedBigInteger('profile_autobridge_id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('CPF');
            $table->string('CEP');
            $table->string('CNH');
            $table->rememberToken();
            $table->timestamps();        

            $table->foreign('profile_autobridge_id')->references('id')->on('profiles')->onDelete('cascade');

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
