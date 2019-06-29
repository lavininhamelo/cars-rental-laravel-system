<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            PermissionsTableSeeder::class,
            ProfilesTableSeeder::class,
            RentalAgencyTableSeeder::class,
            UsersTableSeeder::class,
            StatusVehicleTableSeeder::class,
            PermissionProfileTableSeeder::class,
            VehiclesTableSeeder::class,
            RentalSeeder::class,
        ]);
    }
}
