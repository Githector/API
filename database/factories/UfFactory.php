<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Mp;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Uf>
 */
class UfFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'num_uf' => $this->faker->randomNumber(5),
            'nom_uf' => $this->faker->word,
            'hores_uf' => $this->faker->randomNumber(2),
            'mp_id' => Mp::all()->random()->id,
        ];
    }
}
