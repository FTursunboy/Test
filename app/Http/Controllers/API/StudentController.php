<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\StudentInterface;
use App\Http\Requests\StudentRequest;
use App\Http\Requests\StudentUpdateRequest;
use App\Http\Resources\StudentResource;
use App\Http\Services\StudentService;
use App\Models\Student;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class StudentController extends Controller implements StudentInterface
{
    private StudentService $studentService;

    public function __construct(StudentService $studentService)
    {
        $this->studentService = $studentService;
    }

    public function index() : JsonResponse {
        $students = Student::get();

        return response()->json([
            'students' => $students
        ]);
    }

    public function show(int $id): JsonResponse
    {
        $student = Student::findOrfail($id);

        return response()->json([
            'student' => new StudentResource($student)
        ]);
    }

    public function store(StudentRequest $request): JsonResponse
    {
        $data = $request->validated();

        $student =  $this->studentService->store($data);

        return response()->json([
            'student' => $student
        ]);
    }

    public function update(Student $student, StudentUpdateRequest $request): JsonResponse
    {
        $data = $request->validated();

        $student = $this->studentService->update($data, $student);

        return response()->json([
            'student' => $student
        ]);
    }

    public function delete($id): bool
    {
        // TODO: Implement delete() method.
    }
}
