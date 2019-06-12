<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsToVehicles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('vehicles', function ($table) {
            $table->string('license_plate');
            $table->string('color');
            $table->string('image');
            $table->string('description');
            $table->string('value');
        });
    }

    public function down()
    {
        Schema::table('vehicles', function ($table) {
            $table->string('license_plate');
            $table->string('color');
            $table->string('image');
            $table->string('description');
            $table->string('value');
        });
    }
}
