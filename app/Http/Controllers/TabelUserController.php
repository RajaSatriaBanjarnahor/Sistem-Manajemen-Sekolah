<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class TabelUserController extends Controller
{
    public function index()
    {
        $users = User::all(); // Ambil semua data pengguna dari tabel tbl_users

        return view('admin.tabelUser', compact('users'));
    }
}
