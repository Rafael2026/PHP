<?php

namespace Database\Factories;

use App\Models\Etiqueta;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class EtiquetaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = Etiqueta::class;

    public function definition()
    {
        return [
          'etiqueta' => $this->faker->text(50),
          'color' => $this->faker->text(6),
        ];
    }
}
