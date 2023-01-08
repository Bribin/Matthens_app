<?php

namespace Database\Factories;

use App\Models\Batch;
use App\Models\Course;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Batch>
 */
class BatchFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'batch_id' => Batch::all()->random()->id,
            'mentor_id' => User::all()->random()->id,
            'title' => $this->faker->name,
            'type' =>  $this->faker->randomElement($array = array ('0','1','2')) ,// 'b'
            'mode' =>  $this->faker->randomElement($array = array ('0','1','2')) ,// 'b'
            'description' =>  $this->faker->paragraph(2),
            'start_date' =>  $this->faker->dateTimeBetween('now', '+10 days'),
            'end_date' =>  $this->faker->dateTimeBetween('now', '+10 days'),
            'price' => '0.00',
            'discount_price' =>  '0.00',
            'status' => '0',
        ];
    }
}
