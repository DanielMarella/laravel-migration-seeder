<?php


namespace Database\Seeders;
use Faker\Generator as Faker;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        for ($i=0; $i < 100; $i++) { 
            $newTrain = new Train();
            $newTrain->azienda = $faker->name();
            $newTrain->stazione_di_partenza = $faker->city();
            $newTrain->stazione_di_arrivo = $faker->unique()->city();
            $newTrain->orario_di_partenza = $faker->time();
            $newTrain->orario_di_arrivo = $faker->time();
            $newTrain->codice_treno = $faker->numberBetween(0, 1000);
            $newTrain->numero_carrozze = $faker->numberBetween(0, 20);
            $newTrain->in_orario = $faker->boolean();
            $newTrain->cancellato = $faker->boolean();
            $newTrain->save();



        }
    }
}
