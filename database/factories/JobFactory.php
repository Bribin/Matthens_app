<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Foundation\Auth\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => User::all()->random()->id,
            'title' => $this->faker->jobTitle(),
            'slug' => 'dsdsd',
            'type' => $this->faker->randomElement(['Full-Time','Remote','Part-Time']),
            'location' => $this->faker->country(),
            'description' => $this->faker->words(100, true),
            'organization' => $this->faker->company(),
            'status' => '0',
        ];
    }
}
