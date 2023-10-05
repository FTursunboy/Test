<?php

namespace App\Http\Services;


use App\Models\Student;

class StudentService
{

    public function store(array $data): Student
    {
        $student = Student::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'classroom_id' => $data['classroom_id']
        ]);

        return $student;
    }

    public function update(array $data, Student $student) : Student {

        $student->update([
            'name' => $data['name'],
            'email' => $data['email'],
            'classroom_id' => $data['class_id']
        ]);

        return $student;


    }


}
