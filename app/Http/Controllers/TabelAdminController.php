<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;

class TabelAdminController extends Controller
{
    public function index()
    {
        $admins = Admin::all();
        return view('admin.tabelAdmin', compact('admins'));
    }
}
