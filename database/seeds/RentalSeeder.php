<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class RentalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $profilesTable = DB::table('rentals');
        $profilesTable->delete();
        $profilesTable->insert([
        	'vehicle_id' => '1',
            'user_id' => '1',
            'value'=> '200,00',
            'return_date' => Carbon::now(),
            'status' => 'progress'
        ]);

        $profilesTable->insert([
        	'vehicle_id' => '3',
            'user_id' => '2',
            'value'=> '240,00',
            'return_date' => Carbon::now(),
            'status' => 'progress'
        ]);

        $profilesTable->insert([
        	'vehicle_id' => '6',
            'user_id' => '1',
            'value'=> '240,00',
            'return_date' => Carbon::now(),
            'status' => 'progress'
        ]);

        $profilesTable->insert([
        	'vehicle_id' => '3',
            'user_id' => '2',
            'value'=> '240,00',
            'return_date' => Carbon::now(),
            'status' => 'progress'
        ]);

        
        $profilesTable->insert([
        	'vehicle_id' => '5',
            'user_id' => '3',
            'value'=> '240,00',
            'return_date' => Carbon::now(),
            'status' => 'progress'
        ]);

        
        $profilesTable->insert([
        	'vehicle_id' => '3',
            'user_id' => '3',
            'value'=> '240,00',
            'return_date' => Carbon::now(),
            'status' => 'progress'
        ]);

        $profilesTable->insert([
        	'vehicle_id' => '7',
            'user_id' => '3',
            'value'=> '240,00',
            'return_date' => Carbon::now(),
            'status' => 'progress'
        ]);

        $profilesTable->insert([
        	'vehicle_id' => '1',
            'user_id' => '3',
            'value'=> '240,00',
            'return_date' => Carbon::now(),
            'status' => 'progress'
        ]);

        $profilesTable->insert([
        	'vehicle_id' => '2',
            'user_id' => '3',
            'value'=> '240,00',
            'return_date' => Carbon::now(),
            'status' => 'progress'
        ]);

        $profilesTable->insert([
        	'vehicle_id' => '4',
            'user_id' => '3',
            'value'=> '240,00',
            'return_date' => Carbon::now(),
            'status' => 'progress'
        ]);
    }
}
