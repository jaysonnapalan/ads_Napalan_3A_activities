<?php
use app\Models\Student;
use Illuminate\Support\Facades\Route;

Route::get('Students/create', function(){
    $Student = new Student();
    $Student->first_name = 'John';
    $Student->last_name = 'Doe';
    $Student->email = 'johndoe@example.com';
    $Student->age = 22;
    $Student->save();
    return 'Student Created!';
});

route::get('/Students', function() {
    $Students = Student::all();
    return $Students;
});

Route::get('/Srudents/update', function() {
    $Student = Student::where('email', 'johndoe@example.com')->first();
    $Student->email = 'john.doe@example.com';
    $Student->age = 23;
    $Student->save();
    return 'Student Updated!';
});

Route::get('/Srudents/delete', function() {
    $Student = Student::where('email', 'johndoe@example.com')->first();
    $Student->delete();
    return 'Student Deleted!';
});

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
