<?php

use App\Http\Controllers\AttendController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\ExamStudentsController;
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


Route::group(['prefix' => 'examstudent', 'as' => 'examstudent.'], function () {

    Route::get('', [ExamStudentsController::class, 'index'])->name('index');
    Route::get('/create', [ExamStudentsController::class, 'create'])->name('create');
    Route::post('/store', [ExamStudentsController::class, 'store'])->name('store');
    Route::get('/edit/{id}', [ExamStudentsController::class, 'edit'])->name('edit');
    Route::put('/update', [ExamStudentsController::class, 'update'])->name('update');
    Route::delete('/destroy', [ExamStudentsController::class, 'destroy'])->name('destroy');
});


Route::get('/attend', [AttendController::class, 'index'])->name('AttendController.index');
Route::get('/attend/create', [AttendController::class, 'create'])->name('Attend.create');
Route::post('/attend/store', [AttendController::class, 'store'])->name('Attend.store');
Route::get('/attend/edit/{id}', [AttendController::class, 'edit'])->name('Attend.edit');
Route::put('/attend/update', [AttendController::class, 'update'])->name('Attend.update');
Route::delete('/attend/delete', [AttendController::class, 'delete'])->name('Attend.delete');

Route::group(['prefix' => 'exam', 'as' => 'exam.'], function () {
    Route::get('/', [ExamController::class, 'index'])->name('index');
    Route::get('create', [ExamController::class, 'create'])->name('create');
    Route::post('store', [ExamController::class, 'store'])->name('store');
    Route::get('edit/{id}', [ExamController::class, 'edit'])->name('edit');
    Route::put('update', [ExamController::class, 'update'])->name('update');
    Route::delete('delete', [ExamController::class, 'delete'])->name('delete');
});

Route::group(['prefix' => 'group', 'as' => 'group.'], function () {

    Route::get('/', [GroupController::class, 'index'])->name('index');
    Route::get('/create', [GroupController::class, 'create'])->name('create');
    Route::post('/store', [GroupController::class, 'store'])->name('store');
    Route::get('/edit/{id}', [GroupController::class, 'edit'])->name('edit');
    Route::put('/update', [GroupController::class, 'update'])->name('update');
    Route::delete('/delete', [GroupController::class, 'delete'])->name('delete');
});

Route::get('/lesson', [LessonController::class, 'index'])->name('Lesson.index');
Route::get('/lesson/create', [LessonController::class, 'create'])->name('Lesson.create');
Route::post('/lesson/store', [LessonController::class, 'store'])->name('Lesson.store');
Route::get('/lesson/edit/{id}', [LessonController::class, 'edit'])->name('Lesson.edit');
Route::put('/lesson/update', [LessonController::class, 'update'])->name('Lesson.update');
Route::delete('/lesson/delete', [LessonController::class, 'delete'])->name('Lesson.delete');

Route::get('/student', [StudentController::class, 'index'])->name('Student.index');
Route::get('/student/create', [StudentController::class, 'create'])->name('Student.create');
Route::post('/student/store', [StudentController::class, 'store'])->name('Student.store');
Route::get('/student/edit/{id}', [StudentController::class, 'edit'])->name('Student.edit');
Route::put('/student/update', [StudentController::class, 'update'])->name('Student.update');
Route::delete('/student/delete', [StudentController::class, 'delete'])->name('Student.delete');

Route::get('/user', [UserController::class, 'index'])->name('User.index');
Route::get('/user/create', [UserController::class, 'create'])->name('User.create');
Route::post('/user/store', [UserController::class, 'store'])->name('User.store');
Route::get('/user/edit/{id}', [UserController::class, 'edit'])->name('User.edit');
Route::put('/user/update', [UserController::class, 'update'])->name('User.update');
Route::delete('/user/delete', [UserController::class, 'delete'])->name('User.delete');
