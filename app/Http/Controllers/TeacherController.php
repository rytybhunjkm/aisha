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
        return view('admin.pages.teacher.index', [
            'teachers' => $teachers
        ]);    }

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
        return redirect()->back();
    }

    public function edit($id)
    {
    }

    public function update()
    {
    }

    public function destroy()
    {
    }
}
