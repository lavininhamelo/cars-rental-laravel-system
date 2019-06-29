<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenameColumnUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function(Blueprint $table) {
            $table->renameColumn('profile_autobridge_id', 'profile_id');
        });
    }


    public function down()
    {
        Schema::table('users', function(Blueprint $table) {
            $table->renameColumn('profile_id', 'profile_autobridge_id');
        });
    }
}
