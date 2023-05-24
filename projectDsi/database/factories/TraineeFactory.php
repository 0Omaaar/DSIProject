<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Trainee>
 */
class TraineeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nom' => fake()->name(),
            'prenom' => fake()->name(),
            'email' => fake()->safeEmail(),
            'telephone' => fake()->numberBetween(),
            'date_debut' => fake()->date(),
            'domaine' => fake()->word(),
                ];
    }
}
