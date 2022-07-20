<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use App\Models\ExamStudent;
use App\Models\Student;
use Illuminate\Http\Request;
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

    public function store(Request $request)
    {
        $request->validate([
            'exam_id' => 'required|exists:exams,id',
            'student_id' => 'required|exists:students,id',
            'memorized' => 'required',
            'degree' => 'nullable|numeric',
            'date' => 'required|date',
            'note' => 'nullable'
        ]);
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

    public function edit($id)
    {
        $exams = Exam::get();
        $students = Student::get();
        $examstudents = ExamStudent::find($id);

        return view('admin.pages.examstudent.edit', [
            'exams' => $exams,
            'students' => $students,
            'examstudents' => $examstudents
        ]);
    }

    public function update(Request $request)
    {
        $request->validate([

            'exam_id' => 'required|exists:exams,id',
            'student_id' => 'required|exists:students,id',
            'memorized' => 'required',
            'degree' => 'required',
            'date' => 'required|date',
            'note' => 'nullable'
        ]);

        $examstudents = ExamStudent::find($request->examstudent_id);
        $examstudents->update([
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

    public function delete(Request $request)
    {
        $request->validate([
            'id' => 'required|exists:exam_students,id'
        ]);

        $examstudents = ExamStudent::find($request->id);
        $examstudents->delete();

        Alert::success('نجاح', 'تمت العملية بنجاح');
        return redirect()->back();
    }
}
