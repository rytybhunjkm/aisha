<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class TeacherController extends Controller
{
    public function index()
    {
        $teachers = Teacher::get();
       
        return view('admin.pages.teacher.index',[
            'teachers' => $teachers,
        ]);
    }

    public function create()
    {
        return view('admin.pages.teacher.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3',
            'phone' => 'required|min:11',
            'birthday' => 'nullable|date',
            'note' => 'nullable'
        ]);

        Teacher::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'birthday' => $request->birthday,
            'note' => $request->note,
        ]);
        Alert::success('نجاح', 'تمت العملية بنجاح');
        return redirect(route('admin.teacher.index'));
    }

    public function edit($id)
    {
        $teachers = Teacher::find($id);
        return view('admin.pages.teacher.edit',[
            'teacher'  => $teachers,
        ]);
    }

    public function update(Request $request)
    {

        $request->validate([
            'name' => 'required|min:3',
            'phone' => 'required|min:11',
            'birthday' => 'nullable|date',
            'note' => 'nullable'
        ]);

        $teacher = Teacher::find($request->teacher_id);
        $teacher->update([
            'name' => $request->name,
            'phone' => $request->phone,
            'birthday' => $request->birthday,
            'note' => $request->note,
        ]);

        
        Alert::success('نجاح', 'تمت العملية بنجاح');
        return redirect(route('admin.teacher.index'));


    }

    public function delete(request $request)
    {

        $request->validate([
            'id' => 'required|exists:teachers,id',
        ]);
        
        
        $teacher = Teacher::find($request->id);
        $teacher->delete();

        Alert::success('نجاح', 'تمت العملية بنجاح');
        return redirect()->back();
    }
}
