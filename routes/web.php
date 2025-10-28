<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AttendanceController;

Route::get('/', [AttendanceController::class, 'home'])->name('home');
Route::get('/students', [AttendanceController::class, 'students'])->name('students.index');
Route::get('/subjects', [AttendanceController::class, 'subjects'])->name('subjects.index');
Route::get('/attendances', [AttendanceController::class, 'index'])->name('attendances.index');
