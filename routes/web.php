<?php

use App\Http\Controllers\TeacherController;
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

Route::get('/teacher',[TeacherController::class,'index'])->name('teacher.index');
Route::get('/teacher/create',[TeacherController::class,'create'])->name('teacher.create');
Route::get('/teacher/store',[TeacherController::class,'store'])->name('teacher.store'); 
Route::get('/teacher/edit/{id}',[TeacherController::class,'edit'])->name('teacher.edit');
Route::get('/teacher/update',[TeacherController::class,'update'])->name('teacher.update');
Route::get('/teacher/destroy',[TeacherController::class,'destroy'])->name('teacher.destroy');