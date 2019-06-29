<?php

use Illuminate\Database\Seeder;

class PermissionProfileTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissionsTable = DB::table('permission_profile');
        $permissionsTable->delete();
        $permissionsTable->insert([
        	'id' => '1',
            'profile_id' => '1',
            'permission_id' => '17'
        ]);
        $permissionsTable->insert([
            'id' => '2',
            'profile_id' => '2',
            'permission_id' => '6'
        ]);
        $permissionsTable->insert([
            'id' => '3',
            'profile_id' => '2',
            'permission_id' => '7'
        ]);
        $permissionsTable->insert([
            'id' => '4',
            'profile_id' => '2',
            'permission_id' => '8'
        ]);
        $permissionsTable->insert([
            'id' => '5',
            'profile_id' => '2',
            'permission_id' => '10'
        ]);
        $permissionsTable->insert([
            'id' => '6',
            'profile_id' => '2',
            'permission_id' => '11'
        ]);
        $permissionsTable->insert([
            'id' => '7',
            'profile_id' => '2',
            'permission_id' => '12'
        ]);
        $permissionsTable->insert([
            'id' => '8',
            'profile_id' => '2',
            'permission_id' => '13'
        ]);
        $permissionsTable->insert([
            'id' => '9',
            'profile_id' => '2',
            'permission_id' => '15'
        ]);
        $permissionsTable->insert([
            'id' => '10',
            'profile_id' => '3',
            'permission_id' => '16'
        ]);
        $permissionsTable->insert([
            'id' => '11',
            'profile_id' => '3',
            'permission_id' => '18'
        ]);
        $permissionsTable->insert([
            'id' => '12',
            'profile_id' => '2',
            'permission_id' => '6'
        ]);
        $permissionsTable->insert([
            'id' => '13',
            'profile_id' => '2',
            'permission_id' => '9'
        ]);

    }
}
