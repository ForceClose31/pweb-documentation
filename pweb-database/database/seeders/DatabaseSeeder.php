<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        \App\Models\Teacher::factory()->count(5)->create();
        \App\Models\Subject::factory()->create(['name' => 'Matematika']);
        \App\Models\Subject::factory()->create(['name' => 'Bahasa Indonesia']);
        \App\Models\ClassRoom::factory()->create(['name' => 'X IPA 1']);

        $students = \App\Models\Student::factory()->count(10)->create();
        $class = \App\Models\ClassRoom::first();

        foreach ($students as $student) {
            \App\Models\Enrollment::create([
                'student_id' => $student->id,
                'class_room_id' => $class->id,
            ]);
        }

        $subjectIds = \App\Models\Subject::pluck('id');
        foreach ($subjectIds as $subjectId) {
            \App\Models\ClassSubjectTeacher::create([
                'class_room_id' => $class->id,
                'subject_id' => $subjectId,
                'teacher_id' => \App\Models\Teacher::inRandomOrder()->first()->id,
            ]);
        }
    }
}
