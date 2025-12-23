<?php

namespace App\Http\Controllers;
use App\Models\Student;
use App\Models\Teachers;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    public function index(){
     $students=Student::with('subject','teacher')->get();
       return $students;
    }
}
