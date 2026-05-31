<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;

Route::get('/', function () {
    return view('home');
});

Route::get('/students', function () {
    return view('students.list_students');
});

Route::resource('students', StudentController::class);
Route::resource('teachers', TeacherController::class);


