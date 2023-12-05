<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;

class TabelTeacherController extends Controller
{
    public function index()
    {
        $teachers = Teacher::all();
        return view('admin.tabelTeacher', compact('teachers'));
    }
}
