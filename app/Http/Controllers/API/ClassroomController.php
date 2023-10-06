<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\ClassroomInterface;
use App\Http\Requests\StudentRequest;
use App\Http\Requests\StudentUpdateRequest;
use App\Http\Resources\ClassroomResource;
use App\Models\Classroom;
use App\Models\Student;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ClassroomController extends Controller implements ClassroomInterface
{

    public function index(): JsonResponse
    {
        $classes = Classroom::get();

        return response()->json(
            [
                'classes' => $classes
            ]
        );
    }

    public function show(int $id): JsonResponse
    {
        $class = Classroom::findOrFail($id);

        return response()->json([
            'class' => new ClassroomResource($class)
        ]);
    }

    public function getClassInfo(int $id) {
        $class = Classroom::findOrFail($id);

        $plan = $class->lectures;

        return response()->json([
            'plan' => $plan,
        ]);

    }
    public function store(StudentRequest $request): JsonResponse
    {
        // TODO: Implement store() method.
    }

    public function update(Student $student, StudentUpdateRequest $request): JsonResponse
    {
        // TODO: Implement update() method.
    }

    public function destroy(int $id): JsonResponse
    {
        // TODO: Implement destroy() method.
    }
}
