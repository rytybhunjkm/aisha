<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Lesson;
class LessonController extends Controller
{
    public function index()
    {
        $lessons = Lesson::get();
        return view('admin.pages.lesson.index', [
            'lessons' => $lessons
        ]);    }

    public function create()
    {
        $lessons = Lesson::get();
        return view('admin.pages.lesson.create', [
            'lessons' => $lessons
        ]);
    }
    public function store(Request $request)
    {
        $request->validate([
            'day' => 'required',
            // 'group_id' => 'required|exists:teachers,id',
            'from' => 'nullable',
            'to' => 'nullable',
            'note' => 'nullable'

        ]);


         Lesson::create([
        //     'group_id' => $request->group_id,
        'day' => $request->day,
            $request->from,
            $request->to,
            $request->note
        ]);

        Lesson::success('نجاح', 'تمت العملية بنجاح');
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
