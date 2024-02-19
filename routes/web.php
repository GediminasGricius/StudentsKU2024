<?php

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
