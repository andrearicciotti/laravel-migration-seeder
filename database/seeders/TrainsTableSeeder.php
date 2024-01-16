<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
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
        for ($i=0; $i < 50; $i++) { 
            # code...
            $train = new Train();
            $train->azienda = $faker->randomElement(['Italo', 'Trenitalia',]);
            $train->stazione_di_partenza = $faker->word();
            $train->stazione_di_arrivo = $faker->word();
            $train->orario_di_partenza = $faker->dateTimeBetween('+1 minute', '+2 hour');
            $train->orario_di_arrivo = $faker->dateTimeBetween('+3 hour', '+2 day');
            $train->codice_treno = $faker->bothify('??-######');
            $train->numero_carrozze = $faker->numberBetween(1, 30);
            $train->in_orario = $faker->numberBetween(0, 1); 
            $train->cancellato = $faker->numberBetween(0, 1);
    
            $train->save();
        }
    }
}
