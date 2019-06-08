<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissionsTable = DB::table('permissions');
        $permissionsTable->delete();
        //Users
        $permissionsTable->insert([
            'id' => '1',
        	'name' => 'Users_Create',
        	'description' => 'Permitido criar usuário'
        ]);

        $permissionsTable->insert([
            'id' => '2',
        	'name' => 'Users_Update',
        	'description' => 'Permitido atualizar usuário'
        ]);

        $permissionsTable->insert([
            'id' => '3',
        	'name' => 'Users_Delete',
        	'description' => 'Permitido deletar usuário'
        ]);

        $permissionsTable->insert([
            'id' => '4',
        	'name' => 'Users_List_all',
        	'description' => 'Permitido listar todos os usuários'
        ]);
        
        $permissionsTable->insert([
            'id' => '5',
        	'name' => 'Users_list_part',
        	'description' => 'Permitido listar parte dos usuários'
        ]);
        //vehicle
        $permissionsTable->insert([
            'id' => '6',
            'name' => 'Vehicle_Create',
            'description' => 'Permitido criar veiculo'
        ]);

        $permissionsTable->insert([
            'id' => '7',
            'name' => 'Vehicle_Update',
            'description' => 'Permitido atualizar veiculo'
        ]);

        $permissionsTable->insert([
            'id' => '8',
            'name' => 'Vehicle_Delete',
            'description' => 'Permitido deletar veiculo'
        ]);

        $permissionsTable->insert([
            'id' => '9',
            'name' => 'Vehicle_List_all',
            'description' => 'Permitido listar todos os veiculos'
        ]);
        
        $permissionsTable->insert([
            'id' => '10',
            'name' => 'Vehicle_list_part',
            'description' => 'Permitido listar parte dos veiculos'
        ]);
        //rent
        $permissionsTable->insert([
            'id' => '11',
            'name' => 'Rent_Create',
            'description' => 'Permitido criar aluguel'
        ]);

        $permissionsTable->insert([
            'id' => '12',
            'name' => 'Rent_Update',
            'description' => 'Permitido atualizar aluguel'
        ]);

        $permissionsTable->insert([
            'id' => '13',
            'name' => 'Rent_Delete',
            'description' => 'Permitido deletar aluguel'
        ]);

        $permissionsTable->insert([
            'id' => '14',
            'name' => 'Rent_List_all',
            'description' => 'Permitido listar todos os alugueis'
        ]);
        
        $permissionsTable->insert([
            'id' => '15',
            'name' => 'Rent_list_part',
            'description' => 'Permitido listar parte dos alugueis'
        ]);
        $permissionsTable->insert([
            'id' => '16',
            'name' => 'List_all_Vehicles_rent',
            'description' => 'Permitido listar todos os veículos disponíveis'
        ]);
        //Geral
        $permissionsTable->insert([
            'id' => '17',
            'name' => 'Full_access',
            'description' => 'Permitido tudo'
        ]);
        

    }
}
