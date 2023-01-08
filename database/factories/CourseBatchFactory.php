<?php

namespace Database\Factories;

use App\Models\Batch;
use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Foundation\Auth\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CourseBatch>
 */
class CourseBatchFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'course_id' => Course::all()->random()->id,
            'batch_id' => Batch::all()->random()->id,
        ];
    }
}
