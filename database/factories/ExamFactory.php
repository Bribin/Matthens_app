<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Foundation\Auth\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Exam>
 */
class ExamFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'ExamCode' => $this->faker->company(),
            'ExamName' => $this->faker->company(),
            'Description' => $this->faker->words(3, true),
            'LogoImage' => '',
            'IsActive' => '1',
            'SortOrder' => '1',
            'IsSingleExam' => '1',
            'ExamsCount' => '1',
            'TimeSectionLimit' => '90',
            'CreatedUser' => User::all()->random()->id,
            'price' => '99',
            'discount_price' => '99',
        ];
    }
}
