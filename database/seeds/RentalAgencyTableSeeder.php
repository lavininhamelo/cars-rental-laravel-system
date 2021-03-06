<?php

use Illuminate\Database\Seeder;

class RentalAgencyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rentalAgencyTable = DB::table('rental_agencies');
        $rentalAgencyTable->delete();

         //rentalAgency
         $rentalAgencyTable->insert([
            'id' => '1',
            'name' => 'Locadora Moreninha',
            'city' => 'Campo Grande',
            'state' => 'MS',
            'country' => 'Brazil',
            'location' => 'Avenida Mato Grosso, 232',
            'CNPJ' => '45348894000143'
        ]);

        $rentalAgencyTable->insert([
            'id' => '2',
            'name' => 'Locadora Vila Olinda',
            'city' => 'Campo Grande',
            'state' => 'MS',
            'country' => 'Brazil',
            'location' => 'Avenida Afonso Pena, 454',
            'CNPJ' => '23348894000143'
        ]);
        
        $rentalAgencyTable->insert([
            'id' => '3',
            'name' => 'Locadora Afonso Pena',
            'city' => 'Campo Grande',
            'state' => 'MS',
            'country' => 'Brazil',
            'location' => 'Avenida Manuel da Costa Lima, 232',
            'CNPJ' => '88348894000143'
        ]);

       
    }
}
