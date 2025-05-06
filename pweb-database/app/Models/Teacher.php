<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'email'];

    public function classSubjectTeachers()
    {
        return $this->hasMany(ClassSubjectTeacher::class);
    }
}
