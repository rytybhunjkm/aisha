<?php

use App\Http\Controllers\AttendController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\PaymentsController;
use App\Http\Controllers\GRoupController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\UserController;
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
    return view('admin/master');
});

Route::get('/teacher', [TeacherController::class, 'index'])->name('teacher.index');
Route::get('/teacher/create', [TeacherController::class, 'create'])->name('teacher.create');
Route::post('/teacher/store', [TeacherController::class, 'store'])->name('teacher.store');
Route::get('/teacher/edit/{id}', [TeacherController::class, 'edit'])->name('teacher.edit');
Route::put('/teacher/update', [TeacherController::class, 'update'])->name('teacher.update');
Route::delete('/teacher/destroy', [TeacherController::class, 'destroy'])->name('teacher.destroy');



Route::get('/Payment', [PaymentsController::class, 'index'])->name('Payment.index');
Route::get('/Payment/create', [PaymentsController::class, 'create'])->name('Payment.create');
Route::post('/Payment/store', [PaymentsController::class, 'store'])->name('Payment.store');
Route::get('/Payment/edit/{id}', [PaymentsController::class, 'edit'])->name('Payment.edit');
Route::put('/Payment/update', [PaymentsController::class, 'update'])->name('Payment.update');
Route::delete('/Payment/destroy', [PaymentsController::class, 'destroy'])->name('Payment.destroy');



Route::get('/ExamStudents', [ExamStudentsController::class, 'index'])->name('ExamStudents.index');
Route::get('/ExamStudents/create', [ExamStudentsController::class, 'create'])->name('ExamStudents.create');
Route::post('/ExamStudents/store', [ExamStudentsController::class, 'store'])->name('ExamStudents.store');
Route::get('/ExamStudents/edit/{id}', [ExamStudentsController::class, 'edit'])->name('ExamStudents.edit');
Route::put('/ExamStudents/update', [ExamStudentsController::class, 'update'])->name('ExamStudents.update');
Route::delete('/ExamStudents/destroy', [ExamStudentsController::class, 'destroy'])->name('ExamStudents.destroy');


Route::get('/attend', [AttendController::class, 'index'])->name('AttendController.index');
Route::get('/attend/create', [AttendController::class, 'create'])->name('AttendController.create');
Route::post('/attend/store', [AttendController::class, 'store'])->name('AttendController.store');
Route::get('/attend/edit/{id}', [AttendController::class, 'edit'])->name('AttendController.edit');
Route::put('/attend/update', [AttendController::class, 'update'])->name('AttendController.update');
Route::delete('/attend/delete', [AttendController::class, 'delete'])->name('AttendController.delete');

Route::get('/exam', [ExamController::class, 'index'])->name('ExamController.index');
Route::get('/exam/create', [ExamController::class, 'create'])->name('ExamController.create');
Route::post('/exam/store', [ExamController::class, 'store'])->name('ExamController.store');
Route::get('/exam/edit/{id}', [ExamController::class, 'edit'])->name('ExamController.edit');
Route::put('/exam/update', [ExamController::class, 'update'])->name('ExamController.update');
Route::delete('/exam/delete', [ExamController::class, 'delete'])->name('ExamController.delete');

Route::get('/group', [GroupController::class, 'index'])->name('GroupController.index');
Route::get('/group/create', [GroupController::class, 'create'])->name('GroupController.create');
Route::post('/group/store', [GroupController::class, 'store'])->name('GroupController.store');
Route::get('/group/edit/{id}', [GroupController::class, 'edit'])->name('GroupController.edit');
Route::put('/group/update', [GroupController::class, 'update'])->name('GroupController.update');
Route::delete('/group/delete', [GroupController::class, 'delete'])->name('GroupController.delete');

Route::get('/lesson', [LessonController::class, 'index'])->name('LessonController.index');
Route::get('/lesson/create', [LessonController::class, 'create'])->name('LessonController.create');
Route::post('/lesson/store', [LessonController::class, 'store'])->name('LessonController.store');
Route::get('/lesson/edit/{id}', [LessonController::class, 'edit'])->name('LessonController.edit');
Route::put('/lesson/update', [LessonController::class, 'update'])->name('LessonController.update');
Route::delete('/lesson/delete', [LessonController::class, 'delete'])->name('LessonController.delete');

Route::get('/student', [StudentController::class, 'index'])->name('StudentController.index');
Route::get('/student/create', [StudentController::class, 'create'])->name('StudentController.create');
Route::post('/student/store', [StudentController::class, 'store'])->name('StudentController.store');
Route::get('/student/edit/{id}', [StudentController::class, 'edit'])->name('StudentController.edit');
Route::put('/student/update', [StudentController::class, 'update'])->name('StudentController.update');
Route::delete('/student/delete', [StudentController::class, 'delete'])->name('StudentController.delete');

Route::get('/user', [UserController::class, 'index'])->name('UserController.index');
Route::get('/user/create', [UserController::class, 'create'])->name('UserController.create');
Route::post('/user/store', [UserController::class, 'store'])->name('UserController.store');
Route::get('/user/edit/{id}', [UserController::class, 'edit'])->name('UserController.edit');
Route::put('/user/update', [UserController::class, 'update'])->name('UserController.update');
Route::delete('/user/delete', [UserController::class, 'delete'])->name('UserController.delete');
