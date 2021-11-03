<?php

use App\Activite;
use Illuminate\Database\Seeder;

class ActivitesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Activite::class,50)->create();
    }

}
