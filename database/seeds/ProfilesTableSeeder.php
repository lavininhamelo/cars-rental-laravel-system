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
        
        $profilesTable->insert([
        	'name' => 'Desenvolvimento AutoBridge',
        	'description' => 'Perfil para desenvolvimento'
        ]);

        $profilesTable->insert([
        	'name' => 'Vendas AutoBridge',
        	'description' => 'Perfil para parceria com lojas de aluguel'
        ]);

        $profilesTable->insert([
        	'name' => 'Gerente Loja',
        	'description' => 'Gerencia a sua rede de lojas'
        ]);

		$profilesTable->insert([
        	'name' => 'Atendente Loja',
        	'description' => 'Gerencia a frota de aluguel'
        ]);

        $profilesTable->insert([
        	'name' => 'Usuário',
        	'description' => 'Realiza aluguel do veículos'
        ]);
    }
}
