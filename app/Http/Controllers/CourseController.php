<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class CourseController extends Controller
{

    public function cse()
    {
        $students = Student::get()->where('student_department','CSE');

        return view('admin.pages.all_student',compact('students'));
    }
    public function eee()
    {
        $students = Student::get()->where('student_department','EEE');

        return view('admin.pages.all_student',compact('students'));
    }
    public function ete()
    {
        $students = Student::get()->where('student_department','ETE');

        return view('admin.pages.all_student',compact('students'));
    }
    public function ce()
    {
        $students = Student::get()->where('student_department','CE');

        return view('admin.pages.all_student',compact('students'));
    }
}
