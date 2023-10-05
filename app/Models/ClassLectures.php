<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassLectures extends Model
{
    use HasFactory;

    protected $fillable = ['classroom_id', 'lecture_id', 'order', 'student_id'];
}
