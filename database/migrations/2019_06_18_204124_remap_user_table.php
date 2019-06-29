<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RemapUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function ($table) {
            $table->string('CPF')->nullable()->unique()->change();
            $table->string('CEP')->nullable()->change();
            $table->string('CNH')->nullable()->unique()->change();
        });
    }

  
}
