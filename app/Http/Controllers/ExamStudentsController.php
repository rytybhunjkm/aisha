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
            'student_id' => 'required',
            'memorized' => 'required',
            'degree' => 'required|numeric',
            'date' => 'required|date',
            'note' => 'required'
        ]);
        ExamStudent::create([
            'exam_id' => $request->exam_id,
            'student_id' => $request->student_id,
            'memorized' => $request->memorized,
            'degree' => $request->degree,
            'date' => $request->date,
            'note' => $request->note,
        ]);
        Alert::success('نجاح', 'تمت العملية بنجاح');

        return redirect(route('examstudent.index'));
    }

    public function edit()
    {
    }

    public function update()
    {
    }

    public function destroy()
    {
    }
}
