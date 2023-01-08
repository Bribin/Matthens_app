<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
//       \App\Models\User::factory(12)->create();
//         \App\Models\Tag::factory(12)->create();
        \App\Models\Exam::factory(10)->create();
//        \App\Models\Job::factory(30)->create();
//        \App\Models\Batch::factory(30)->create();
//        \App\Models\CourseBatch::factory(12)->create();
//        \App\Models\BatchTiming::factory(20)->create();
    }
}
