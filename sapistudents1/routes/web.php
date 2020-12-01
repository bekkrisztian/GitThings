<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/students', function () {
    $students = \App\Models\Student::all();
    foreach ($students as $student) {
        echo $student->name.'<br>';
    }
});

Route::get('/student', function() {

    $user = \App\Models\Student::find(1);
    echo $user->name. '<br>';

    $user = \App\Models\Student::where('gender', 1)->first();
    echo $user->name. '<br>';
});

Route::get('/addstudent1', function () {

    $user = new \App\Models\Student;
    $user->name = "Gipsz Jakab";
    $user->email = "g@yahoo.com";
    $user->gender = 1;
    $user->save();
});

Route::get('addstudent2', function() {

    $user = \App\Models\Student::create([
        'name' => 'Nagy Peter',
        'email' => 'peti@yahho.com',
    ]);
});

Route::get('/deletestudent/{id}', function ($id) {

    $stud = \App\Models\Student::find($id);
    $stud->delete();
});

// Route::get('students', [StudentController::class, 'index']);
// Route::get('students/{id}', [StudentController::class, 'show']);
// Route::delete('students/delete/{id}', [StudentController::class, 'destroy']);

// Route::get('/', function () {
//     return view('pages.home');
// });
// Route::get('/about', function () {
//     return view('pages.contact');
// });

Route::get('students/create', [StudentController::class, 'create'])->name('students.create');
Route::post('students/create', [StudentController::class, 'store'])->name('students.store');
Route::get('students/edit/{id}', [StudentController::class, 'edit'])->name('students.edit');
Route::post('students/edit/{id}', [StudentController::class, 'update'])->name('students.update');
Route::get('students/{id}', [StudentController::class, 'show']);
Route::delete('students/delete/{id}', [StudentController::class, 'destroy'])->name('students.destroy');

Auth::routes();

Route::get('/home', [\App\Http\Controllers\StudentController::class, 'index'])->name('home');
