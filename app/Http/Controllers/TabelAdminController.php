<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use App\User;

class TabelAdminController extends Controller
{
    public function index()
    {
        $admins = Admin::all();
        return view('admin.tabelAdmin', compact('admins'));
    }

    public function create()
    {
        return view('admin.tabelAdminAdd');
        
    }

    public function store(Request $request)
    {
        $validatedData = validator($request->all(), [
            'FirstName' => 'required',
            'LastName' => 'required',
            'DateofBirth' => 'required',
            'Gender' => 'required',
            'PhoneNumber' => 'required',
        ])->validate();
        
        Admin::create($validatedData);

        // Redirect to a success page or wherever you want
        return redirect()->route('tabelAdmins')->with('success', 'Admin created successfully!');
    }

    public function edit($AdminID)
    {
        $admins = Admin::find($AdminID);

        return view('admin.tabelAdminEdit', compact('admins'));
    }


    public function update(Request $request, $AdminID)
    {
        $admins = Admin::find($AdminID);
        // dd($admins);
        $validatedData = validator($request->all(), [
            'FirstName' => 'required',
            'LastName' => 'required',
            'DateofBirth' => 'required',
            'Gender' => 'required',
            'PhoneNumber' => 'required',
        ])->validated();

        // Update the user
        Admin::find($AdminID)->update($validatedData);

        // Redirect to a success page or wherever you want
        return redirect()->route('tabelAdmins')->with('success', 'Admin updated successfully!');
    }

    public function delete($AdminID)
    {
        $admins = Admin::find($AdminID);

        if (!$admins) {
            // Handle user not found (e.g., show an error message or redirect)
            return redirect()->route('tabelAdmins')->with('error', 'Admin not found.');
        }

        $admins->delete();

        // Optionally, you can add a success message
        return redirect()->route('tabelAdmins')->with('success', 'Admin deleted successfully.');
    }

}