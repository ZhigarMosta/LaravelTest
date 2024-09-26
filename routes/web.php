<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/first', [MainController::class, "show"])->name("first") ;

Route::get('/students', [StudentController::class, "index"])->name("student-index") ;