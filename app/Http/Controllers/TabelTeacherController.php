<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;
use App\User;

class TabelTeacherController extends Controller
{
    public function index()
    {
        $teacher = Teacher::all();
        return view('admin.TeacherView', compact('teacher'));
    }

    public function create()
    {
        return view('admin.addTeacherForm');
    }


    public function store(Request $request)
    {
        // Validasi data input
        $validatedData = validator($request->all(), [
            'TeacherID' => 'nullable|integer',
            'FirstName' => 'required|string',
            'LastName' => 'required|string',
            'DateofBirth' => 'required|date',
            'Gender' => 'required|in:Male,Female',
            'PhoneNumber' => 'required|string',
            'SubjectTaught' => 'required|string',
            ])->validate();

        Teacher::create($validatedData);

        return redirect()->route('TabelTeachers')->with('success', 'Teacher created successfully!');
    }

    public function edit($TeacherID)
    {
        $teacher = Teacher::find($TeacherID);

        return view('admin.editTeacherForm', compact('teacher'));
    }

    public function update(Request $request, $TeacherID)
    {
        $teacher = Teacher::find($TeacherID);
        // dd($teacher);
        $validatedData = validator($request->all(), [
            // 'TeacherID' => 'nullable|integer',
            'FirstName' => 'required|string|max:255',
            'LastName' => 'required|string|max:255',
            'DateofBirth' => 'required|date',
            'Gender' => 'required|in:Male,Female',
            'PhoneNumber' => 'required|string|max:15',
            'SubjectTaught' => 'required|string|max:255',
            ])->validated();

        Teacher::find($TeacherID)->update($validatedData);
       

        // if (!$teacher) {
        //     return redirect()->route('TabelTeachers')->with('error', 'Teacher not found');
        // }

        return redirect()->route('TabelTeachers')->with('success', 'Teacher updated successfully');
    }

    public function showTeacherView()
    {
        return view('admin.TeacherView');
    }

    public function delete($id)
    {
        $teacher = Teacher::find($id);

        if (!$teacher) {
            return redirect()->route('TabelTeachers')->with('error', 'Teacher not found');
        }

        // Hapus guru
        $teacher->delete();

        return redirect()->route('TabelTeachers')->with('success', 'Teacher deleted successfully');
    }
}
