<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('home');
});

Route::get('/students', function () {
    return view('students.list_students');
});

Route::resource('students', StudentController::class);

Route::get('/teachers', function () {
    return view('teachers.list_teachers');
});