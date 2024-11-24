<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Teacher;
use App\Models\ClassName;
use App\Models\Student;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        Teacher::factory(5)->create()->each(function ($teacher) {

            ClassName::factory(rand(2, 3))->create([
                'teacher_id' => $teacher->id,
            ])->each(function ($class) {
                Student::factory(rand(20, 30))->create([
                    'class_name_id' => $class->id,
                ]);
            });
        });
    }
}
