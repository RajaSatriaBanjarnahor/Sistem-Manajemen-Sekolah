<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class TabelUserController extends Controller
{
    public function index()
    {
        $users = User::all(); // Ambil semua data pengguna dari tabel tbl_users

        return view('admin.tabelUser', compact('users'));
    }

    public function create()
    {
        return view('admin.tabelUserAdd');
        
    }

    public function store(Request $request)
    {
        $validatedData = validator($request->all(), [
            'name' => 'required|max:255',
            'email' => 'required|email|unique:tbl_users,email',
            'role' => 'required|in:admin,guru,siswa',
            'password' => 'required|min:8|confirmed',
            'StudentID' => 'nullable|integer',
            'TeacherID' => 'nullable|integer',
            'AdminID' => 'nullable|integer',
        ])->validate();

        $validatedData['password'] = Hash::make($request->input('password'));

        User::create($validatedData);

        // Redirect to a success page or wherever you want
        return redirect()->route('TabelUsers')->with('success', 'User created successfully!');
    }

    public function edit($id)
    {
        $user = User::find($id);

        return view('admin.tabelUserEdit', compact('user'));
    }

    public function update(Request $request, $id)
    {

        $user = User::find($id);
        $validatedData = validator($request->all(), [
            'name' => 'required|max:255',
            'email' => 'required|email|unique:tbl_users,email,' . $id,
            'role' => 'required|in:admin,guru,siswa',
            'password' => 'nullable|min:8|confirmed',
            'StudentID' => 'nullable|integer',
            'TeacherID' => 'nullable|integer',
            'AdminID' => 'nullable|integer',
        ])->validate();

        // If password is provided, update it
        if ($request->filled('password') && $request->input('password') !== $user->password) {
            $validatedData['password'] = Hash::make($request->input('password'));
        } else {
            // Remove the password field from the validated data if not provided or unchanged
            unset($validatedData['password']);
        }

        // Update the user
        User::find($id)->update($validatedData);

        // Redirect to a success page or wherever you want
        return redirect()->route('TabelUsers')->with('success', 'User updated successfully!');
    }

    public function delete($id)
    {
        $user = User::find($id);

        if (!$user) {
            // Handle user not found (e.g., show an error message or redirect)
            return redirect()->route('TabelUsers')->with('error', 'User not found.');
        }

        $user->delete();

        // Optionally, you can add a success message
        return redirect()->route('TabelUsers')->with('success', 'User deleted successfully.');
    }

}
