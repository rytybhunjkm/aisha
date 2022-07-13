<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Student;
use Illuminate\Http\Request;

use RealRashid\SweetAlert\Facades\Alert;

class StudentController extends Controller
{



    public function index()
    {
        $students  = Student::get();
        $groups = Group::get();

        return view('admin.pages.student.index', [
            'students' => $students,
            'groups' => $groups
        ]);
    }

    public function create()
    {
        $students = Student::get();
        $groups = Group::get();

        return view('admin.pages.student.create', [
            'students' =>  $students,
            'groups' => $groups
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3',
            'brithday' => 'nullable|date',
            'phone' => 'required|min:11',
            'type' => 'required|in:normal,dense',
            'note' => 'nullable',
            'group_id' => 'required'
        ]);


        Student::create([
            'name' => $request->name,
            'brithday' => $request->brithday,
            'phone' => $request->phone,
            'type' => $request->type,
            'group_id' => $request->group_id,
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
