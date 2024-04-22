<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\LecturerController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

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



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/create', [StudentController::class,'create'])->name('student.create');
Route::post('/store', [StudentController::class,'store'])->name('student.store');

Route::get('/', [StudentController::class,'index'])->name('student.index');

Route::get('/update/{id}',[StudentController::class,'update'])->name('student.update');
Route::post('/save/{id}',[StudentController::class,'save'])->name('student.save');

Route::get('/delete/{id}',[StudentController::class,'delete'])->name('student.delete');

Route::post('/student/filter', [StudentController::class,'filter'])->name('student.filter');

Route::get('/lecturer/create', [LecturerController::class,'create'])->name('lecturer.create');
Route::post('/lecturer/store', [LecturerController::class,'store'])->name('lecturer.store');

Route::get('/course/create', [CourseController::class,'create'])->name('course.create');
Route::post('/course/store',[CourseController::class,'store'])->name('course.store');

Route::get('/courses', [CourseController::class,'index'])->name('courses');
Route::get('/lecturers', [LecturerController::class,'index'])->name('lecturers');

Route::get('/setLocale/{lang}', [LanguageController::class,'setLocale'])->name('setLocale');

