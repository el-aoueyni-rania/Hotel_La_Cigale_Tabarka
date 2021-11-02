<?php
use App\Restauration;
use Illuminate\Database\Seeder;

class RestaurationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Restauration::class,10)->create();
    }
}
