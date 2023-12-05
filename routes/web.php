<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Http\Controllers\TabelUserController;
use App\Http\Controllers\TabelStudentController;
use App\Http\Controllers\TabelAdminController;
use App\Http\Controllers\TabelTeacherController;


Route::get('/', function() {
    return redirect(route('login'));
});
Route::get('/starter', function() {
    return view('starter');
});

Auth::routes(['verify' => false, 'reset' => false]);

Route::middleware('auth')->group(function() {
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
});

Route::group(['middleware' => 'admin'], function () {
    Route::get('admin.dashboard', 'AdminController@dashboard')->name('admin.dashboard');
    Route::get('/TabelUsers', [TabelUserController::class, 'index'])->name('tabelUsers');
    Route::get('/TabelStudents', [TabelStudentController::class, 'index'])->name('tabelStudents');
    Route::get('/TabelAdmins', [TabelAdminController::class, 'index'])->name('tabelAdmins');
    Route::get('/TabelTeachers', [TabelTeacherController::class, 'index'])->name('tabelTeachers');
});

Route::group(['middleware' => 'guru'], function () {
    Route::get('guru.dashboard', 'GuruController@dashboard')->name('guru.dashboard');
});

Route::group(['middleware' => 'siswa'], function () {
    Route::get('siswa.dashboard', 'SiswaController@dashboard')->name('siswa.dashboard');
});