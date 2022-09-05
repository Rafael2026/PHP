<?php

namespace Database\Factories;

use App\Models\Tarea;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class TareaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = Tarea::class;

    public function definition()
    {
        return [
          'titulo' => $this->faker->title(),
          'texto' => $this->faker->text(),
          'fecha' => $this->faker->date(),
          'completa' => $this->faker->numberBetween(0, 1),
        ];
    }
}
