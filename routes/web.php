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
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {

    Route::group(['prefix' => 'teacher', 'as' => 'teacher.'], function () {
        Route::get('', [TeacherController::class, 'index'])->name('index');
        Route::get('/create', [TeacherController::class, 'create'])->name('create');
        Route::post('/store', [TeacherController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [TeacherController::class, 'edit'])->name('edit');
        Route::put('/update', [TeacherController::class, 'update'])->name('update');
        Route::delete('/delete', [TeacherController::class, 'delete'])->name('delete');
    });

    Route::group(['prefix' => 'Payment', 'as' => 'Payment.'], function () {
        Route::get('', [PaymentsController::class, 'index'])->name('index');
        Route::get('/create', [PaymentsController::class, 'create'])->name('create');
        Route::post('/store', [PaymentsController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [PaymentsController::class, 'edit'])->name('edit');
        Route::put('/update', [PaymentsController::class, 'update'])->name('update');
        Route::delete('/delete', [PaymentsController::class, 'delete'])->name('delete');
    });

    Route::group(['prefix' => 'examstudent', 'as' => 'examstudent.'], function () {

        Route::get('', [ExamStudentsController::class, 'index'])->name('index');
        Route::get('/create', [ExamStudentsController::class, 'create'])->name('create');
        Route::post('/store', [ExamStudentsController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [ExamStudentsController::class, 'edit'])->name('edit');
        Route::put('/update', [ExamStudentsController::class, 'update'])->name('update');
        Route::delete('/destroy', [ExamStudentsController::class, 'destroy'])->name('destroy');
    });




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


    Route::group(['prefix' => 'student', 'as' => 'student.'], function () {
        Route::get('', [StudentController::class, 'index'])->name('index');
        Route::get('create', [StudentController::class, 'create'])->name('create');
        Route::post('store', [StudentController::class, 'store'])->name('store');
        Route::get('edit/{id}', [StudentController::class, 'edit'])->name('edit');
        Route::put('update', [StudentController::class, 'update'])->name('update');
        Route::delete('delete', [StudentController::class, 'delete'])->name('delete');
    });

    Route::group(['prefix' => 'user', 'as' => 'user.'], function () {
        Route::get('', [UserController::class, 'index'])->name('index');
        Route::get('create', [UserController::class, 'create'])->name('create');
        Route::post('store', [UserController::class, 'store'])->name('store');
        Route::get('edit/{id}', [UserController::class, 'edit'])->name('edit');
        Route::put('update', [UserController::class, 'update'])->name('update');
        Route::delete('delete', [UserController::class, 'delete'])->name('delete');
    });
});
