<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class usuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = \Faker\Factory::create();

      DB::table("usuario")->insert([
        'email' => $faker->unique()->safeEmail(),
        'password' => $faker->text(),
        'nombre' => $faker->name(),
        'apellidos' => $faker->text(),
      ]);
    }
}
