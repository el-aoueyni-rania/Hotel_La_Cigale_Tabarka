<?php
use App\Bienetre;
use Illuminate\Database\Seeder;

class BienetresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(Bienetre::class,10)->create();
    }
}
