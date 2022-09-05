<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class tareaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = \Faker\Factory::create();

      DB::table("tarea")->insert([
        'titulo' => $faker->title(),
        'texto' => $faker->text(),
        'fecha' => now(),
        'completa' => $faker->boolean(),
      ]);
    }
}
