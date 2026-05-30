<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/students', function () {
    return view('students.list_students');
});

Route::get('/teachers', function () {
    return view('teachers.list_teachers');
});