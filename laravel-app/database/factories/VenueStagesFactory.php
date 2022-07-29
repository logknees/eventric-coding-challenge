<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\VenueStages>
 */
class VenueStagesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'venue_id' => fake()->randomNumber(2, false),
            'stage_plot' => fake()->sentence(6),
            'sound_person_name' => fake()->name(),
        ];
    }
}
