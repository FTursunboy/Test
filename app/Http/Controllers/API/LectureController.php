<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\LectureResource;
use App\Models\Lecture;
use Illuminate\Http\Request;

class LectureController extends Controller
{
    public function index() {
        $lectures = Lecture::get();

        return response()->json([
            'lectures' => LectureResource::collection($lectures)
        ]);
    }

    public function show() {
        
    }
}
