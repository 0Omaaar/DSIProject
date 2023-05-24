<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Offer>
 */
class OfferFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
            return [
                'sujet_offre' => fake()->name(),
                'domaine_offre' => fake()->name(),
                'profil_requis' => fake()->name(),
                'duree_stage' => fake()->numberBetween(),
                'lieu_stage' => fake()->address(),
                'description_stage' => fake()->name(),
                'mode_stage' => fake()->name(),
            ];
    }
}
