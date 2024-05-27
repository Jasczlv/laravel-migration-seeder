<?php

namespace Database\Seeders;

use DateTime;
use Faker\Core\DateTime as CoreDateTime;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        //
        for ($i = 0; $i < 100; $i++) {
            DB::table('trains')->insert([
                'azienda' => $faker->company(),
                'stazione_di_partenza' => $faker->city(),
                'stazione_di_arrivo' => $faker->city(),
                'data_partenza' => $faker->date('Y_m_d'),
                'data_arrivo' => $faker->date('Y_m_d'),
                'orario_di_partenza' => $faker->time(),
                'orario_di_arrivo' => $faker->time(),
                'codice_treno' => $faker->bothify('?#####'),
                'numero_carrozze' => $faker->numberBetween(0, 100),
                'in_orario' => $faker->boolean(),
                'cancellato' => $faker->boolean(),
            ]);
        };
    }
}
