<?php

namespace App\Http\Controllers;

use App\Models\Attend;
use App\Models\Lesson;
use App\Models\Student;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AttendController extends Controller
{

    public function index()
    {
        $students  = Student::get();
        $Lessons = Lesson::get();
        $attends = Attend::get();

        return view('admin.pages.attende.index', [
            'students' => $students,
            'Lessons' => $Lessons,
            'attends' => $attends
        ]);
    }

    public function create()
    {
        $students  = Student::get();
        $lessons = Lesson::get();


        return view('admin.pages.attende.create', [
            'students' => $students,
            'lessons' => $lessons

        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'student_id' => 'required',
            'lesson_id' => 'nullable',
            'date' => 'required',
            'note' => 'nullable',

        ]);

        dd($request);
        Attend::create([

            'student_id' => $request->student_id,
            'lesson_id' =>  $request->lesson_id,
            'date' =>  $request->date,
            'attend' =>  $request->attend,
            'note' =>  $request->note,
        ]);
        Alert::success('نجاح', 'تمت العملية بنجاح');
        return redirect()->back();
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
