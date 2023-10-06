<?php

namespace App\Http\Interfaces;

use App\Http\Requests\PlanRequest;
use App\Http\Requests\StudentRequest;
use App\Http\Requests\StudentUpdateRequest;
use App\Models\Student;
use GuzzleHttp\Psr7\Request;
use Illuminate\Http\JsonResponse;

interface ClassroomInterface {
    public function index() : JsonResponse;

    public function show(int $id) : JsonResponse;

    public function store(PlanRequest $request, int $clasroomId) : JsonResponse;

    public function update(Student $student, StudentUpdateRequest $request) : JsonResponse;

    public function destroy(int $id) : JsonResponse;
}
