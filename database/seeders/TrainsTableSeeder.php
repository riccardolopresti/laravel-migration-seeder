<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $new_train = new Train();
        /*
         $table->string('azienda', 50);
            $table->string('stazione_partenza', 50);
            $table->string('stazione_arrivo', 50);
            $table->string('orario_partenza', 50);
            $table->string('orario_arrivo', 50);
            $table->integer('codice_treno');
            $table->tinyInteger('numero_carrozze')->unsigned();
            $table->tinyInteger('in_orario')->default(1);
            $table->tinyInteger('cancellato')->default(0);
        */
        $new_train->azienda = 'TreniItalia';
        $new_train->stazione_partenza = 'Milano';
        $new_train->stazione_arrivo = 'Firenze';
        $new_train->orario_partenza = '9:45';
        $new_train->orario_arrivo = '11:00';
        $new_train->codice_treno = 1895210;
        $new_train->prezzo_biglietto = 114;
        $new_train->numero_carrozze = 20;
        $new_train->save();

    }
}
