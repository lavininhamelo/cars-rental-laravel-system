<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RemapRentalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('rentals', function ($table) {
            $table->dropColumn('status');
            $table->enum('status', ['progress', 'fineshed', 'overdue']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    
}
