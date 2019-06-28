<?php

use Illuminate\Database\Seeder;

class ProfilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $profilesTable = DB::table('profiles');
        $profilesTable->delete();
        $profilesTable->insert([
        	'name' => 'Administrador',
        	'description' => 'Perfil total'
        ]);

        $profilesTable->insert([
        	'name' => 'Funcionário',
        	'description' => 'Perfil de funcionário da locadora'
        ]);

        $profilesTable->insert([
        	'name' => 'Cliente',
        	'description' => 'Realiza aluguel do veículos'
        ]);

    }
}
