<?php

namespace Database\Factories;

use App\Models\Usuario;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsuarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = Usuario::class;

    public function definition()
    {
        return [
          'email' => $this->faker->email(),
          'password' => Hash::make($this->faker->password()),
          'nombre' => $this->faker->date(),
          'apellidos' => $this->faker->randomNumber(),
        ];
    }
}
