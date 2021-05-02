<?php
use App\Utlisateur;
use Illuminate\Database\Seeder;

class UtlisateursTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Utlisateur::class,4)->create();
    }
}
