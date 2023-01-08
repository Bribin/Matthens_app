<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Foundation\Auth\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Course>
 */
class CourseFactory extends Factory
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
            'title' => $this->faker->company(),
            'description' => $this->faker->words(3, true),
            'level' => $this->faker->randomElement(['Beginner','Intermediate','Advanced']),
            'language' => $this->faker->randomElement(['English','Malayalam']),
            'intro_url' => 'https://vimeo.com/46926279',
            'cover_image' => '',
            'price' => '200',
            'discount_price' => '99',
            'status' => '0',
        ];
    }
}
