<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ExamController extends Controller
{
    public function index()
    {
         return view('admin.pages.exam.index');
    }

    public function create()
    {
        return view('admin.pages.exam.create');
    }

    public function store(Request $request)
    {

        
        $request->validate([
            'teacher' => 'required|min:3',
            'title' => 'required|min:11',
            'max_mark' => 'nullable|required',
            'min_mark' => 'nullable|required',
            'note' => 'nullable'
        ]);

       
        Exam::create([
            'teacher' => $request->teacher,
            'title' => $request->title,
            'max_mark' => $request->max_mark,
            'min_mark' => $request->min_mark,
            'note' => $request->note,
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
