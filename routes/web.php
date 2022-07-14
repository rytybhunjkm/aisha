<?php

use App\Http\Controllers\AttendController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\PaymentsController;
use App\Http\Controllers\GroupController;
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




Route::group(['prefix' => 'attend',  'as' => 'attend.'], function () {
    Route::get('', [AttendController::class, 'index'])->name('index');
    Route::get('create', [AttendController::class, 'create'])->name('create');
    Route::post('store', [AttendController::class, 'store'])->name('store');
    Route::get('edit/{id}', [AttendController::class, 'edit'])->name('edit');
    Route::put('update', [AttendController::class, 'update'])->name('update');
    Route::delete('delete', [AttendController::class, 'delete'])->name('delete');
});


Route::group(['prefix' => 'exam', 'as' => 'exam.'], function () {
    Route::get('', [ExamController::class, 'index'])->name('index');
    Route::get('create', [ExamController::class, 'create'])->name('create');
    Route::post('store', [ExamController::class, 'store'])->name('store');
    Route::get('edit/{id}', [ExamController::class, 'edit'])->name('edit');
    Route::put('update', [ExamController::class, 'update'])->name('update');
    Route::delete('delete', [ExamController::class, 'delete'])->name('delete');
});


Route::get('/group', [GroupController::class, 'index'])->name('group.index');
Route::get('/group/create', [GroupController::class, 'create'])->name('group.create');
Route::post('/group/store', [GroupController::class, 'store'])->name('group.store');
Route::get('/group/edit/{id}', [GroupController::class, 'edit'])->name('group.edit');
Route::put('/group/update', [GroupController::class, 'update'])->name('group.update');
Route::delete('/group/delete', [GroupController::class, 'delete'])->name('group.delete');

Route::get('/lesson', [LessonController::class, 'index'])->name('Lesson.index');
Route::get('/lesson/create', [LessonController::class, 'create'])->name('Lesson.create');
Route::post('/lesson/store', [LessonController::class, 'store'])->name('Lesson.store');
Route::get('/lesson/edit/{id}', [LessonController::class, 'edit'])->name('Lesson.edit');
Route::put('/lesson/update', [LessonController::class, 'update'])->name('Lesson.update');
Route::delete('/lesson/delete', [LessonController::class, 'delete'])->name('Lesson.delete');


Route::group(['prefix' => 'student', 'as' => 'student.'], function () {
    Route::get('', [StudentController::class, 'index'])->name('index');
    Route::get('create', [StudentController::class, 'create'])->name('create');
    Route::post('store', [StudentController::class, 'store'])->name('store');
    Route::get('edit/{id}', [StudentController::class, 'edit'])->name('edit');
    Route::put('update', [StudentController::class, 'update'])->name('update');
    Route::delete('delete', [StudentController::class, 'delete'])->name('Sdelete');
});

Route::group(['prefix' => 'user', 'as' => 'user.'], function () {
    Route::get('', [UserController::class, 'index'])->name('index');
    Route::get('create', [UserController::class, 'create'])->name('create');
    Route::post('store', [UserController::class, 'store'])->name('store');
    Route::get('edit/{id}', [UserController::class, 'edit'])->name('edit');
    Route::put('update', [UserController::class, 'update'])->name('update');
    Route::delete('delete', [UserController::class, 'delete'])->name('delete');
});
