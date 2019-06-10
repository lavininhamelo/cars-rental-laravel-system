<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenameColumnsPermissions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('permissions_profiles', function(Blueprint $table) {
            $table->renameColumn('id_profile_autobridge', 'profile_id');
            $table->renameColumn('id_permission', 'permission_id');
        });
    }


    public function down()
    {
        Schema::table('permissions_profiles', function(Blueprint $table) {
            $table->renameColumn('profile_id', 'id_profile_autobridge');
            $table->renameColumn('permission_id', 'id_permission');
        });
    }
}
