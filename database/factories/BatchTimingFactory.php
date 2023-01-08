<?php

namespace Database\Factories;

use App\Models\BatchTiming;
use App\Models\Batch;
use App\Models\Course;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class BatchTimingFactory extends Factory
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
            'title' => $this->faker->name,
            'date' => $this->faker->date ,// 'b'
            'time' => $this->faker->time( 'H:i:s', '15:00:00' ),
            'duration' => $this->faker->paragraph(2),
            'status' => '0',
        ];
    }
}
