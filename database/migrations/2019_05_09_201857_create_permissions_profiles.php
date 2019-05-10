<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePermissionsProfiles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permissions_profiles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_profile_autobridge');
            $table->integer('id_permission');

            $table->foreign('id_profile_autobridge')->references('id')->on('profiles')->onDelete('cascade');
            $table->foreign('id_permission')->references('id')->on('permissions')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('permissions_profiles');
    }
}
