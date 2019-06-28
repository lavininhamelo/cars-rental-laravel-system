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
            'id'=>'1',
        	'name' => 'Administrador',
        	'description' => 'Perfil total'
        ]);

        $profilesTable->insert([
            'id'=>'2',
        	'name' => 'Funcionário',
        	'description' => 'Perfil de funcionário da locadora'
        ]);

        $profilesTable->insert([
            'id'=>'3',
        	'name' => 'Cliente',
        	'description' => 'Realiza aluguel do veículos'
        ]);

    }
}
