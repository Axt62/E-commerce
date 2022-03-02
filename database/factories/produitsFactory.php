<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\produits>
 */
class produitsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'id' => $this->faker->id(),
            'description' => $this->faker->description(),
            'nom' => $this->faker->nom(),
            'prix' => $this->faker->prix(),
            'img' => $this->faker->img(),
            'created_at' => $this->faker->created_at(),
            'promotion' => $this->faker->promotion(),

        ];
    }
}
