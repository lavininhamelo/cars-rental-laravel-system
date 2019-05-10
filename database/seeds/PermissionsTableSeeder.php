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

        //Users
        $permissionsTable->insert([
        	'name' => 'Users_Create',
        	'description' => 'Permitido criar usuário'
        ]);

        $permissionsTable->insert([
        	'name' => 'Users_Update',
        	'description' => 'Permitido atualizar usuário'
        ]);

        $permissionsTable->insert([
        	'name' => 'Users_Delete',
        	'description' => 'Permitido deletar usuário'
        ]);

        $permissionsTable->insert([
        	'name' => 'Users_List_all',
        	'description' => 'Permitido listar todos os usuários'
        ]);
        
        $permissionsTable->insert([
        	'name' => 'Users_list_part',
        	'description' => 'Permitido listar parte dos usuários'
        ]);
        //vehicle
        $permissionsTable->insert([
            'name' => 'Vehicle_Create',
            'description' => 'Permitido criar veiculo'
        ]);

        $permissionsTable->insert([
            'name' => 'Vehicle_Update',
            'description' => 'Permitido atualizar veiculo'
        ]);

        $permissionsTable->insert([
            'name' => 'Vehicle_Delete',
            'description' => 'Permitido deletar veiculo'
        ]);

        $permissionsTable->insert([
            'name' => 'Vehicle_List_all',
            'description' => 'Permitido listar todos os veiculos'
        ]);
        
        $permissionsTable->insert([
            'name' => 'Vehicle_list_part',
            'description' => 'Permitido listar parte dos veiculos'
        ]);
        //rent
        $permissionsTable->insert([
            'name' => 'Rent_Create',
            'description' => 'Permitido criar aluguel'
        ]);

        $permissionsTable->insert([
            'name' => 'Rent_Update',
            'description' => 'Permitido atualizar aluguel'
        ]);

        $permissionsTable->insert([
            'name' => 'Rent_Delete',
            'description' => 'Permitido deletar aluguel'
        ]);

        $permissionsTable->insert([
            'name' => 'Rent_List_all',
            'description' => 'Permitido listar todos os alugueis'
        ]);
        
        $permissionsTable->insert([
            'name' => 'Rent_list_part',
            'description' => 'Permitido listar parte dos alugueis'
        ]);
        

    }
}
