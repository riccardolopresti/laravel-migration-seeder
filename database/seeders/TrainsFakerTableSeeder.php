<?php

namespace Database\Seeders;

use App\Models\Train;
use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainsFakerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $Faker)
    {
        for ($i=0; $i <100 ; $i++) {
            $new_train = new Train();
            $new_train->azienda = $Faker->randomElement(['Trenitalia SpA','Trentino Trasporti Esercizio Srl','Trenord SpA','Impresa Ferroviaria Italiana', 'Decotrain SpA ']);
            $new_train->stazione_partenza = $Faker->randomElement(['Milano','Roma','Firenze','Napoli', 'Bologna']);
            $new_train->stazione_arrivo = $Faker->randomElement(['Milano','Roma','Firenze','Napoli', 'Bologna']);
            $new_train->orario_partenza = $Faker->numerify('####');
            $new_train->orario_arrivo = $Faker->numerify('####');
            $new_train->codice_treno = $Faker->randomNumber(7, true);
            $new_train->prezzo_biglietto = $Faker->numberBetween(1, 127);
            $new_train->numero_carrozze = $Faker->numberBetween(1, 40);
            $new_train->save();
        }
    }
}
