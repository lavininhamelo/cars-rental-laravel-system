<?php

use Illuminate\Database\Seeder;

class VehiclesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $vehiclesTable = DB::table('vehicles');
        $vehiclesTable->delete();

        //vehicles
        $vehiclesTable->insert([
            'id' => '1',
            'rental_agency_id' => '1',
            'manufacturer' => 'Fiat',
            'model' => 'Uno',
            'year' => '2019',
            'chassi' => '9BWSU19F08B302158',
            'status_id' => '1'

        ]);
        $vehiclesTable->insert([
            'id' => '2',
            'rental_agency_id' => '2',
            'manufacturer' => 'Volkswagen',
            'model' => 'Fox',
            'year' => '2019',
            'chassi' => '1BWSU19F08B302158',
            'status_id' => '1'
        ]);
        $vehiclesTable->insert([
            'id' => '3',
            'rental_agency_id' => '3',
            'manufacturer' => 'Audi',
            'model' => 'R8',
            'year' => '2019',
            'chassi' => '3AWSU19F08B302158',
            'status_id' => '1'
        ]);
        $vehiclesTable->insert([
            'id' => '4',
            'rental_agency_id' => '1',
            'manufacturer' => 'Fiat',
            'model' => 'Siena',
            'year' => '2019',
            'chassi' => '8XWSU19F08B302158',
            'status_id' => '1'
        ]);
        $vehiclesTable->insert([
            'id' => '5',
            'rental_agency_id' => '1',
            'manufacturer' => 'General Motors',
            'model' => 'Celta',
            'year' => '2012',
            'chassi' => '8BWSU19F08B302158',
            'status_id' => '1'
        ]);
        $vehiclesTable->insert([
            'id' => '7',
            'rental_agency_id' => '1',
            'manufacturer' => 'Volkswagen',
            'model' => 'Voyage',
            'year' => '2019',
            'chassi' => '8AWSU19F08B302158',
            'status_id' => '1'
        ]);
        $vehiclesTable->insert([
            'id' => '6',
            'rental_agency_id' => '3',
            'manufacturer' => 'Hyundai',
            'model' => 'HB20',
            'year' => '2019',
            'chassi' => '8CWSU19F08B302158',
            'status_id' => '1'
        ]);
        $vehiclesTable->insert([
            'id' => '8',
            'rental_agency_id' => '2',
            'manufacturer' => 'General Motors',
            'model' => 'Onix',
            'year' => '2019',
            'chassi' => '7DWSU19F08B302158',
            'status_id' => '1'
        ]);
        $vehiclesTable->insert([
            'id' => '9',
            'rental_agency_id' => '2',
            'manufacturer' => 'Renault',
            'model' => 'Sandero',
            'year' => '2019',
            'chassi' => '8DWSU19F08B302158',
            'status_id' => '1'
        ]);
        $vehiclesTable->insert([
            'id' => '10',
            'rental_agency_id' => '2',
            'manufacturer' => 'Volkswagen',
            'model' => 'Fox',
            'year' => '2019',
            'chassi' => '1BWSU19F08B302158',
            'status_id' => '1'
        ]);
        $vehiclesTable->insert([
            'id' => '11',
            'rental_agency_id' => '3',
            'manufacturer' => 'Audi',
            'model' => 'R8',
            'year' => '2019',
            'chassi' => '5AWSU19F08B302158',
            'status_id' => '1'
        ]);
        $vehiclesTable->insert([
            'id' => '12',
            'rental_agency_id' => '1',
            'manufacturer' => 'Fiat',
            'model' => 'Uno',
            'year' => '2019',
            'chassi' => '4BWSU19F08B302158',
            'status_id' => '1'
        ]);
    }
}
