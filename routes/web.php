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



Route::get('/Payment',[PaymentsController::class,'index'])->name('Payment.index');
Route::get('/Payment/create',[PaymentsController::class,'create'])->name('Payment.create');
Route::post('/Payment/store',[PaymentsController::class,'store'])->name('Payment.store'); 
Route::get('/Payment/edit/{id}',[PaymentsController::class,'edit'])->name('Payment.edit');
Route::put('/Payment/update',[PaymentsController::class,'update'])->name('Payment.update');
Route::delete('/Payment/destroy',[PaymentsController::class,'destroy'])->name('Payment.destroy');



Route::get('/ExamStudents',[ExamStudentsController::class,'index'])->name('ExamStudents.index');
Route::get('/ExamStudents/create',[ExamStudentsController::class,'create'])->name('ExamStudents.create');
Route::post('/ExamStudents/store',[ExamStudentsController::class,'store'])->name('ExamStudents.store'); 
Route::get('/ExamStudents/edit/{id}',[ExamStudentsController::class,'edit'])->name('ExamStudents.edit');
Route::put('/ExamStudents/update',[ExamStudentsController::class,'update'])->name('ExamStudents.update');
Route::delete('/ExamStudents/destroy',[ExamStudentsController::class,'destroy'])->name('ExamStudents.destroy');
