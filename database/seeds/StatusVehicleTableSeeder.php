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
        $statusTable->delete();

        $statusTable->insert([
            'id' => '1',
        	'name' => 'Disponível'
        ]);
        $statusTable->insert([
            'id' => '2',
        	'name' => 'Manutenção'
        ]);
        $statusTable->insert([
            'id' => '3',
        	'name' => 'Locado'
        ]);
        $statusTable->insert([
            'id' => '4',
        	'name' => 'Reservado'
        ]);
        $statusTable->insert([
            'id' => '5',
        	'name' => 'Revisão'
        ]);

    }
}
