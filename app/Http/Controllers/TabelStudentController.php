<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class TabelStudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('admin.tabelStudent', compact('students'));
    }
}
