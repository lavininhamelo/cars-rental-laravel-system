<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('vehicles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('rental_agency_id');
            $table->string('manufacturer');
            $table->string('model');
            $table->year('year');
            $table->string('chassi');
            $table->foreign('rental_agency_id')->references('id')->on('rental_agency')->onDelete('cascade');
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
        Schema::dropIfExists('vehicles');
    }
}
