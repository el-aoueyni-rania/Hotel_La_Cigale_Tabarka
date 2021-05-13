<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(ReservationsTableSeeder::class);
        $this->call(BienetresTableSeeder::class);
        $this->call(ActivitesTableSeeder::class);
        $this->call(RestaurationsTableSeeder::class);
        $this->call(ServicesTableSeeder::class);

    }
}
