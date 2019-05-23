<?php

use Illuminate\Database\Seeder;

class StatusVehicleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
    {
        $statusTable = DB::table('status_vehicles');
        
        $statusTable->insert([
        	'name' => 'Disponível'
        ]);
        $statusTable->insert([
        	'name' => 'Manutenção'
        ]);
        $statusTable->insert([
        	'name' => 'Locado'
        ]);
        $statusTable->insert([
        	'name' => 'Reservado'
        ]);
        $statusTable->insert([
        	'name' => 'Revisão'
        ]);

    }
}
