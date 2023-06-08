<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Guest\Train;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 50 ; $i++) {
            $train = new Train();
            $train->azienda = $faker->word();
            $train->stazione_di_partenza = $faker->word();
            $train->stazione_di_arrivo = $faker->word();
            $train->orario_di_partenza = $faker->time();
            $train->orario_di_arrivo = $faker->time();
            $train->codice_treno = $faker->numerify('########');
            $train->numero_carrozze = $faker->numberBetween(5,20);
            $train->save();
        }
    }
}
