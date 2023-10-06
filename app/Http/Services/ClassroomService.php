<?php

namespace App\Http\Services;


use App\Models\Classroom;
use App\Models\Student;

class ClassroomService
{

    public function store(array $data): Student
    {

    }

    public function update(array $data, Student $student) : Student {

        $classroom = Classroom::findOrFail($classroomId);

        // Проверка, что запрос содержит правильные данные о лекциях и их порядке.
        $request->validate([
            'lectures' => 'required|array',
            'lectures.*.lecture_id' => 'required|exists:lectures,id',
            'lectures.*.order' => 'required|integer',
        ]);

        // Добавление учебного плана для класса.
        foreach ($request->lectures as $lecture) {
            $classroom->lectures()->attach($lecture['lecture_id'], ['order' => $lecture['order']]);
        }


    }


}
