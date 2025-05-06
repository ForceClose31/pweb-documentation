<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Student;
use App\Models\ClassRoom;

class SchoolController extends Controller
{
    public function index()
    {
        $students = Student::with('classes')->get();
        return view('students', compact('students'));
    }

    public function classRoom()
    {
        $classes = ClassRoom::with('students')->get();
        return view('classes', compact('classes'));
    }

    public function subject()
    {
        $classes = ClassRoom::with(['classSubjectTeachers.subject', 'classSubjectTeachers.teacher'])->get();
        return view('subjects', compact('classes'));
    }
}
