<?php

namespace App\Http\Interfaces;

use App\Http\Requests\StudentRequest;
use App\Http\Requests\StudentUpdateRequest;
use App\Models\Student;
use GuzzleHttp\Psr7\Request;
use Illuminate\Http\JsonResponse;

interface StudentInterface {
    public function index() : JsonResponse;

    public function show(int $id) : JsonResponse;

    public function store(StudentRequest $request) : JsonResponse;

    public function update(Student $student, StudentUpdateRequest $request) : JsonResponse;

    public function delete($id) : bool;


}
