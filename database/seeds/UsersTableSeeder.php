<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissionsTable = DB::table('users');

        //Users
        $permissionsTable->insert([
        	'profile_autobridge_id' => '1',
        	'name' => 'Admin',
        	'email' => 'admin@autobridge.com',
        	'password' => bcrypt('admin@123'),
        	'CPF' => '00000000000',
        	'CEP' => '00000000',
        	'CNH' => '00000000'
        ]);
    }
}
