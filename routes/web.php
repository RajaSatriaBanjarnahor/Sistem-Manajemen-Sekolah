<?php

<<<<<<< Updated upstream
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

use Illuminate\Support\Facades\Route; // Pastikan mengimpor Route
use Illuminate\Support\Facades\Auth; // Pastikan mengimpor Auth
=======
>>>>>>> Stashed changes
use App\Http\Controllers\TabelUserController;
use App\Http\Controllers\TabelStudentController;
use App\Http\Controllers\TabelAdminController;
use App\Http\Controllers\TabelTeacherController;



Route::get('/', function () {
    return redirect(route('login'));
});
Route::get('/starter', function () {
    return view('starter');
});
Route::get('/TabelUserAdd', function () {
    return view('admin.tabelUserAdd');
});
Route::get('/TabelUserEdit', function () {
    return view('admin.tabelUserEdit');
});
<<<<<<< Updated upstream
Route::get('/TabelAdminAdd', function() {
    return view('admin.tabelAdminAdd');
});
Route::get('/TabelAdminEdit', function() {
    return view('admin.tabelAdminEdit');
});
=======
Route::get('/TabelTeacherAdd', function() {
    return view('admin.addTeacherForm');
});
Route::get('/TabelTeacherEdit', function() {
    return view('admin.editTeacherForm');
});

>>>>>>> Stashed changes


Auth::routes(['verify' => false, 'reset' => false]);

Route::middleware(['auth', 'redirectIfAuthenticated'])->group(function () {
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
});

Route::group(['middleware' => 'admin'], function () {
    Route::get('admin.dashboard', 'AdminController@dashboard')->name('admin.dashboard');
    Route::get('/TabelUser', [TabelUserController::class, 'index'])->name('TabelUsers');
    Route::get('/TabelUser/create', [TabelUserController::class, 'create'])->name('AddUser');
    Route::post('/TabelUser/store', [TabelUserController::class, 'store'])->name('StoreUser');
    Route::get('/TabelUser/edit/{id}', [TabelUserController::class, 'edit'])->name('EditUser');
    Route::post('/TabelUser/update/{id}', [TabelUserController::class, 'update'])->name('UpdateUser');
    Route::get('/TabelUser/delete/{id}', [TabelUserController::class, 'delete'])->name('DeleteUser');
    Route::get('/TabelStudents', [TabelStudentController::class, 'index'])->name('tabelStudents');
    Route::get('/TabelStudents/edit/{StudentID}', [TabelStudentController::class, 'edit'])->name('EditStudents');
    Route::post('/TabelStudents/update/{StudentID}', [TabelStudentController::class, 'update'])->name('UpdateStudents');
    Route::get('/TabelStudents/delete/{StudentID}', [TabelStudentController::class, 'delete'])->name('DeleteStudents');
    Route::get('/TabelStudents/create', [TabelStudentController::class, 'create'])->name('AddStudents');
    Route::post('/TabelStudents/store', [TabelStudentController::class, 'store'])->name('StoreStudents');
    Route::get('/TabelAdmins', [TabelAdminController::class, 'index'])->name('tabelAdmins');
<<<<<<< Updated upstream
    Route::get('/TabelAdmins/create', [TabelAdminController::class, 'create'])->name('AddAdmins');
    Route::post('/TabelAdmins/store', [TabelAdminController::class, 'store'])->name('StoreAdmins');
    Route::get('/TabelAdmins/edit/{id}', [TabelAdminController::class, 'edit'])->name('EditAdmins');
    Route::post('/TabelAdmins/update/{id}', [TabelAdminController::class, 'update'])->name('UpdateAdmins');
    Route::get('/TabelAdmins/delete/{id}', [TabelAdminController::class, 'delete'])->name('DeleteAdmins');
    Route::get('/TabelTeachers', [TabelTeacherController::class, 'index'])->name('tabelTeachers');
=======
    Route::get('/TabelTeachers', [TabelTeacherController::class, 'index'])->name('TabelTeachers');
    Route::get('/TabelView', [TabelTeacherController::class, 'index'])->name('TabelView');
    Route::post('/TabelTeachers/store', [TabelTeacherController::class, 'store'])->name('StoreTeacher');
    Route::get('/TabelTeachers/create', [TabelTeacherController::class, 'create'])->name('AddTeacher');
    Route::get('/TabelTeachers/edit/{TeacherID}', [TabelTeacherController::class, 'edit'])->name('EditTeacher');
    Route::post('/TabelTeachers/update/{TeacherID}', [TabelTeacherController::class, 'update'])->name('UpdateTeacher');
    Route::get('/TabelTeachers/delete/{TeacherID}', [TabelTeacherController::class, 'delete'])->name('DeleteTeacher');
>>>>>>> Stashed changes
});

Route::group(['middleware' => 'guru'], function () {
    Route::get('guru.dashboard', 'GuruController@dashboard')->name('dashboardGuru');
});

Route::group(['middleware' => 'siswa'], function () {
    Route::get('siswa.dashboard', 'SiswaController@dashboard')->name('siswa.dashboard');
});