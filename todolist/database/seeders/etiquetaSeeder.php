<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class etiquetaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = \Faker\Factory::create();

      DB::table("etiqueta")->insert([
        'etiqueta' => $faker->text(),
        'color' => $faker->text(),
      ]);
    }
}
