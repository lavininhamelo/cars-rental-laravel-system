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
            'rental_agency_id' => '1',
            'manufacturer' => 'Fiat',
            'model' => 'Uno',
            'year' => '2019',
            'chassi' => '9BWSU19F08B302158',
            'status_id' => '1',
            'color' => 'Branco',
            'image' => 'https://www.toyota.com.br/wp-content/themes/toyota/ciclo-toyota/carros/corolla_gli_at_tecido_040_carPage.png',
            'description' => '1.4 TFSI SEDAN AMBIENTE 16V FLEX 4P TIPTRONIC',
            'value' => '300',
            'license_plate' => 'ABC-1234'



        ]);
        $vehiclesTable->insert([
            'rental_agency_id' => '2',
            'manufacturer' => 'Toyota',
            'model' => 'Fox',
            'year' => '2019',
            'chassi' => '1BWSU19F08B302158',
            'status_id' => '1', 'color' => 'Azul',
            'image' => 'https://pictures.dealer.com/t/tracylangstonfordfd/1596/45935de18fc5004ed1ca035f610dfbccx.jpg',
            'description' => '1.4 TFSI SEDAN AMBIENTE 16V FLEX 4P TIPTRONIC',             
            'value' => '120',             
            'license_plate' => 'ABC-1234'

        ]);
        $vehiclesTable->insert([
            'rental_agency_id' => '3',
            'manufacturer' => 'Audi',
            'model' => 'R8',
            'year' => '2019',
            'chassi' => '3AWSU19F08B302158',
            'status_id' => '1', 'color' => 'Azul',
            'image' => 'https://www.mazda.com.au/globalassets/settings/vehicle-assets/mazda2/2017-04---ipm/hatch/gt/m2_hatch_gt_soul_red_crystal_front_3-4_980x520.png',
            'description' => '1.4 TFSI SEDAN AMBIENTE 16V FLEX 4P TIPTRONIC',             
            'value' => '120',             
            'license_plate' => 'ABC-1234'

        ]);
        $vehiclesTable->insert([
            'rental_agency_id' => '1',
            'manufacturer' => 'Fiat',
            'model' => 'Siena',
            'year' => '2019',
            'chassi' => '8XWSU19F08B302158',
            'status_id' => '1',
            'color' => 'Prata',
            'image' => 'https://www.toyota.com.br/wp-content/themes/toyota/ciclo-toyota/carros/hilux-cabine-dupla_SR_4X2_MAN_FLEX_040_carPage.png',
            'description' => 'Hilux cabine branca',             
            'value' => '120',             
            'license_plate' => 'ABC-1234'

        ]);
        $vehiclesTable->insert([
            'rental_agency_id' => '1',
            'manufacturer' => 'Toyotas',
            'model' => 'Celta',
            'year' => '2012',
            'chassi' => '8BWSU19F08B302158',
            'status_id' => '1',
            'color' => 'Prata',
            'image' => 'https://www.toyota.com.br/wp-content/themes/toyota/ciclo-toyota/carros/camry_camry_1F7_carPage.png',
            'description' => '1.4 TFSI SEDAN AMBIENTE 16V FLEX 4P TIPTRONIC',
            'value' => '120',
            'license_plate' => 'ABC-1234'

        ]);
        $vehiclesTable->insert([
            'rental_agency_id' => '1',
            'manufacturer' => 'Volkswagen',
            'model' => 'Voyage',
            'year' => '2019',
            'chassi' => '8AWSU19F08B302158',
            'status_id' => '1', 'color' => 'Azul',
            'image' => 'https://www.mazda.com.au/globalassets/settings/vehicle-assets/mazda2/2017-04---ipm/hatch/gt/m2_hatch_gt_soul_red_crystal_front_3-4_980x520.png',
            'description' => '1.4 TFSI SEDAN AMBIENTE 16V FLEX 4P TIPTRONIC',
            'value' => '120',
            'license_plate' => 'ABC-1234'

        ]);
        $vehiclesTable->insert([
            'rental_agency_id' => '3',
            'manufacturer' => 'Toyota',
            'model' => 'HB20',
            'year' => '2019',
            'chassi' => '8CWSU19F08B302158',
            'status_id' => '1',
            'color' => 'Prata',
            'image' => 'https://www.toyota.com.br/wp-content/themes/toyota/ciclo-toyota/carros/camry_camry_1F7_carPage.png',
            'description' => '1.4 TFSI SEDAN AMBIENTE 16V FLEX 4P TIPTRONIC',             
            'value' => '120',            
            'license_plate' => 'ABC-1234'

        ]);
        $vehiclesTable->insert([
            'rental_agency_id' => '2',
            'manufacturer' => 'Toyota',
            'model' => 'Onix',
            'year' => '2019',
            'chassi' => '7DWSU19F08B302158',
            'status_id' => '1',
            'color' => 'Branco',
            'image' => 'https://www.toyota.com.br/wp-content/themes/toyota/ciclo-toyota/carros/corolla_gli_at_tecido_040_carPage.png',
            'description' => '1.4 TFSI SEDAN AMBIENTE 16V FLEX 4P TIPTRONIC',             
            'value' => '120',             
            'license_plate' => 'ABC-1234'
        ]);
        $vehiclesTable->insert([
            'rental_agency_id' => '2',
            'manufacturer' => 'Toyota',
            'model' => 'Fox',
            'year' => '2019',
            'chassi' => '1BWSU19F08B302152',
            'status_id' => '1',
            'color' => 'Prata',
            'image' => 'https://pictures.dealer.com/t/tracylangstonfordfd/1596/45935de18fc5004ed1ca035f610dfbccx.jpg',
            'description' => '1.4 TFSI SEDAN AMBIENTE 16V FLEX 4P TIPTRONIC',             
            'value' => '120',             
            'license_plate' => 'ABC-1234'
        ]);
    }
}
