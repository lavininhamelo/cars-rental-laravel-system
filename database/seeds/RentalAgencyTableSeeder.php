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
            'name' => 'Agency 1',
            'city' => 'Campo Grande',
            'state' => 'MS',
            'country' => 'Brazil',
            'location' => 'Avenida Mato Grosso, 232',
            'CNPJ' => '45.348.894/0001-43'
        ]);
        $rentalAgencyTable->insert([
            'id' => '2',
            'name' => 'Agency 2',
            'city' => 'Campo Grande',
            'state' => 'MS',
            'country' => 'Brazil',
            'location' => 'Avenida Afonso Pena, 454',
            'CNPJ' => '23.348.894/0001-43'
        ]);
        $rentalAgencyTable->insert([
            'id' => '3',
            'name' => 'Agency 3',
            'city' => 'Campo Grande',
            'state' => 'MS',
            'country' => 'Brazil',
            'location' => 'Avenida Manuel da Costa Lima, 232',
            'CNPJ' => '88.348.894/0001-43'
        ]);
    }
}
