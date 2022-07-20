<?php

namespace App\Http\Controllers;

use App\Http\Requests\ExamStudent\ExamStudentDeleteRequest;
use App\Http\Requests\ExamStudent\ExamStudentStoreRequest;
use App\Http\Requests\ExamStudent\ExamStudentUpdateRequest;
use App\Models\Exam;
use App\Models\ExamStudent;
use App\Models\Student;
use RealRashid\SweetAlert\Facades\Alert;

class ExamStudentsController extends Controller
{
    public function index()
    {
        $examstudents = ExamStudent::get();

        return view('admin.pages.examstudent.index', [
            'examstudents' => $examstudents
        ]);
    }

    public function create()
    {
        $students = Student::get();
        $exams = Exam::get();

        return view('admin.pages.examstudent.create', [
            'students' => $students,
            'exams' => $exams
        ]);
    }

    public function store(ExamStudentStoreRequest $request)
    {
        ExamStudent::create([
            'exam_id' => $request->exam_id,
            'student_id' => $request->student_id,
            'memorized' => $request->memorized,
            'degree' => $request->degree ?? 0,
            'date' => $request->date,
            'note' => $request->note,
        ]);
        Alert::success('نجاح', 'تمت العملية بنجاح');

        return redirect(route('admin.examstudent.index'));
    }

    public function edit(ExamStudent $examStudent)
    {
        $exams = Exam::get();
        $students = Student::get();

        return view('admin.pages.examstudent.edit', [
            'exams' => $exams,
            'students' => $students,
            'examstudents' => $examStudent
        ]);
    }

    public function update(ExamStudentUpdateRequest $request, ExamStudent $examStudent)
    {
        $examStudent->update([
            'exam_id' => $request->exam_id,
            'student_id' => $request->student_id,
            'memorized' => $request->memorized,
            'degree' => $request->degree ?? 0,
            'date' => $request->date,
            'note' => $request->note,
        ]);
        Alert::success('نجاح', 'تمت العملية بنجاح');

        return redirect(route('admin.examstudent.index'));
    }

    public function delete(ExamStudentDeleteRequest $request,ExamStudent $examstudent)
    {
        $examstudent->delete();
        Alert::success('نجاح', 'تمت العملية بنجاح');
        return redirect()->back();
    }
}
