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
        // $this->call(UsersTableSeeder::class);
<<<<<<< HEAD
      $this->call(UtlisateursTableSeeder::class);
        //$this->call(BienetresTableSeeder::class);
        //$this->call(RestaurationsTableSeeder::class);
       
        $this->call(ServiceTableSeeder::class);
=======
        $this->call(UtlisateursTableSeeder::class);
        $this->call(BienetresTableSeeder::class);

>>>>>>> eaff1b5e63c43165a4e9c6e35254697188206d22
    }
}
