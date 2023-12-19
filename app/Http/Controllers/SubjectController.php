<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Subject;

class SubjectController extends Controller
{
    public function index()
    {
        $subject = Subject::all();
        return view('admin.tabelSubject', ['subject' => $subject]);
    }

   
    public function create()
    {
        return view('admin.tabelSubjectAdd');
    }


    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = validator($request->all(), [
            'id' => 'nullable|integer',
            'name' => 'required|max:255',
            'class' => 'nullable|string',
        ])->validate();
    
        // Create a new subject record in the database
        Subject::create($validatedData);
    
        // Redirect back or to a specific page after successful submission
        return redirect()->route('TabelSubjects')->with('success', 'Subject created successfully!');
        // return redirect()->back()->with('success', 'Subject added successfully');
    }

    
    public function show($id)
    {
        $Subject = Subject::find($id);

        return view('admin.tabelSubjectEdit', compact('Subject'));
    }

    public function edit($id)
    {
         // Get subject data from the database
         $subject = Subject::find($id);

         // Send subject data to the view
         return view('admin.tabelSubjectEdit', ['subject' => $subject]);
    }

    public function update(Request $request, $id)
    {
          // Validation if needed
          $validatedData = validator($request->all(), [
            'name' => 'required|max:255',
            'class' => 'nullable|string',
        ])->validate();

        // Get subject data from the database
        $subject = Subject::find($id);
        // Save changes
        $subject->update($validatedData);

        // Redirect to another page or show a success message
        return redirect('/subject')->with('success', 'Subject updated successfully');
    }

    public function delete($id)
    {
        $subject = Subject::find($id);

        if (!$subject) {
            // Handle user not found (e.g., show an error message or redirect)
            return redirect()->route('TabelSubjects')->with('error', 'subject not found.');
        }

        $subject->delete();

        // Optionally, you can add a success message
        return redirect()->route('TabelSubjects')->with('success', 'Subject deleted successfully.');
    }
}
