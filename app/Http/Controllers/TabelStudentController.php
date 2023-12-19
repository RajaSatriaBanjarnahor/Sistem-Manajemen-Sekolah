<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use Illuminate\Support\Facades\Hash;

class TabelStudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('admin.tabelStudent', compact('students'));
    }


    public function create()
    {
        return view('admin.tabelStudentAdd');
    }
    // ubah
    public function store(Request $request)
    {
        $validatedData = validator($request->all(), [
            'FirstName' => 'required',
            'LastName' => 'required',
            'DateofBirth' => 'required',
            'Gender' => 'required',
            'PhoneNumber' => 'required',
            'ClassID' => 'required',
        ])->validated();

        $validatedData['StudentID'] = Hash::make($request->input('StudentID'));

        Student::create($validatedData);

        // Redirect to a success page or wherever you want
        return redirect()->route('tabelStudents')->with('success', 'Students created successfully!');
    }

    public function edit($id)
    {
        $Student = Student::find($id);

        return view('admin.tabelStudentEdit', compact('Student'));
    }

    public function update(Request $request, $id)
    {
        // ubah
        $Student = Student::find($id);
        $validatedData = validator($request->all(), [
            'FirstName' => 'required',
            'LastName' => 'required',
            'DateofBirth' => 'required',
            'Gender' => 'required',
            'PhoneNumber' => 'required',
            'ClassID' => 'required',
        ])->validate();

        $Student->FirstName = $validatedData['FirstName'];
        $Student->LastName = $validatedData['LastName'];
        $Student->DateofBirth = $validatedData['DateofBirth'];
        $Student->Gender = $validatedData['Gender'];
        $Student->PhoneNumber = $validatedData['PhoneNumber'];
        $Student->ClassID = $validatedData['ClassID'];
        $Student->save();

        // Redirect to a success page or wherever you want
        return redirect()->route('tabelStudents')->with('success', 'Students updated successfully!');
    }

    public function delete($Student)
    {
        $Student = Student::find($Student);

        if (!$Student) {
            // Handle user not found (e.g., show an error message or redirect)
            return redirect()->route('tabelStudents')->with('error', 'Students not found.');
        }

        $Student->delete();

        // Optionally, you can add a success message
        return redirect()->route('tabelStudents')->with('success', 'Students deleted successfully.');
    }
}
