<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use App\Models\Teacher;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ExamController extends Controller
{
    public function index()
    {
        $exams = Exam::get();
        return view('admin.pages.exam.index', [
            'exams' => $exams
        ]);
    }

    public function create()
    {
        $teachers = Teacher::get();
        return view('admin.pages.exam.create', [
            'teachers' => $teachers
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'teacher_name' => 'required|exists:teachers,name',
            'title' => 'required|min:11',
            'max_mark' => 'required|numeric',
            'min_mark' => 'required|numeric',
            'note' => 'nullable'
        ]);


        Exam::create([
            'teacher' => $request->teacher_name,
            'title' => $request->title,
            'max_mark' => $request->max_mark,
            'min_mark' => $request->min_mark,
            'note' => $request->note,
        ]);
        Alert::success('نجاح', 'تمت العملية بنجاح');

        return redirect(route('admin.exam.index'));
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
