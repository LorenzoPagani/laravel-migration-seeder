<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $trains = [
            [
                'Azienda' => 'Trenitalia',
                'Stazione_di_partenza' => 'Roma Termini',
                'Stazione_di_arrivo' => 'Napoli Centrale',
                'orario_di_partenza' => '08:00:00',
                'orario_di_arrivo' => '10:30:00',
                'codice_treno' => 'IC123',
                'numero_carrozze' => 8,
                'in_orario' => true,
                'cancellato' => false,
            ],
            [
                'Azienda' => 'Italo',
                'Stazione_di_partenza' => 'Milano Centrale',
                'Stazione_di_arrivo' => 'Firenze Santa Maria Novella',
                'orario_di_partenza' => '09:15:00',
                'orario_di_arrivo' => '12:45:00',
                'codice_treno' => 'AV456',
                'numero_carrozze' => 10,
                'in_orario' => true,
                'cancellato' => false,
            ],
            [
                'Azienda' => 'Frecciarossa',
                'Stazione_di_partenza' => 'Firenze Santa Maria Novella',
                'Stazione_di_arrivo' => 'Milano Centrale',
                'orario_di_partenza' => '11:30:00',
                'orario_di_arrivo' => '14:15:00',
                'codice_treno' => 'FR789',
                'numero_carrozze' => 6,
                'in_orario' => true,
                'cancellato' => false,
            ],
            [
                'Azienda' => 'Regionale',
                'Stazione_di_partenza' => 'Napoli Centrale',
                'Stazione_di_arrivo' => 'Salerno',
                'orario_di_partenza' => '13:45:00',
                'orario_di_arrivo' => '16:20:00',
                'codice_treno' => 'REG101',
                'numero_carrozze' => 5,
                'in_orario' => true,
                'cancellato' => false,
            ],
        ];
        foreach ($trains as $train) {
            $newTrain = new Train();
            $newTrain->Azienda = $train['Azienda'];
            $newTrain->Stazione_di_partenza = $train['Stazione_di_partenza'];
            $newTrain->Stazione_di_arrivo = $train['Stazione_di_arrivo'];
            $newTrain->orario_di_partenza = $train['orario_di_partenza'];
            $newTrain->orario_di_arrivo = $train['orario_di_arrivo'];
            $newTrain->codice_treno = $train['codice_treno'];
            $newTrain->numero_carrozze = $train['numero_carrozze'];
            $newTrain->in_orario = $train['in_orario'];
            $newTrain->cancellato = $train['cancellato'];
            $newTrain->save();
        }
        for ($i = 0; $i < 5; $i++) {
            $newTrain = new Train();
            $newTrain->Azienda = $faker->company();
            $newTrain->Stazione_di_partenza = $faker->city();
            $newTrain->Stazione_di_arrivo = $faker->city();
            $newTrain->orario_di_partenza = $faker->time();
            $newTrain->orario_di_arrivo = $faker->time();
            $newTrain->codice_treno = $faker->bothify('??###');
            $newTrain->numero_carrozze = $faker->numberBetween(1, 20);
            $newTrain->in_orario = $faker->boolean();
            $newTrain->cancellato = $faker->boolean();
            $newTrain->save();
        }
    }
}
