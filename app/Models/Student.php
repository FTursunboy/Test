<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'classroom_id'];

    public function lectures()
    {
        return $this->classroom->lectures();
    }

    public function classroom() {
        return $this->belongsTo(Classroom::class, 'classroom_id');
    }




}
