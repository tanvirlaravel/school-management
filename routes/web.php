<?php

use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/teachers/', [TeacherController::class, 'index'])->name('teachers.index');
Route::get('/teachers/{id}', [TeacherController::class, 'show'])->name('teachers.show');



