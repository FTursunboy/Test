<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\ClassLectures;
use App\Models\Classroom;
use App\Models\Lecture;
use App\Models\Student;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
//        $classe = Classroom::factory()->create();
//        Lecture::factory()->create();
//        Student::factory()->create(['class_id' => $classe->id]);
        ClassLectures::factory()->create();

    }
}
