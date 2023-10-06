<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function students() {
        return $this->hasMany(Student::class, 'classroom_id');
    }


    public function lectures()
    {
        return $this->belongsToMany(Lecture::class, 'class_lectures');
    }



}
