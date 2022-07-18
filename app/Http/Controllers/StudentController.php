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

        return view('admin.pages.student.index', [
            'students' => $students,
        ]);
    }

    public function create()
    {
        $groups = Group::get();

        return view('admin.pages.student.create', [
            'groups' => $groups
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3',
            'brithday' => 'nullable|date',
            'phone' => 'required|min:11',
            'type' => 'required|in:' . getTypesInString(getStudentTypes()),
            'note' => 'nullable',
            'group_id' => 'required|exists:groups,id'
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
        return redirect(route('admin.student.index'));
    }

    public function edit($id)
    {
        $groups = Group::get();
        $student = Student::find($id);
        return view('admin.pages.student.edit',[
            'groups' => $groups,
            'student' => $student
        ]);
    }

    public function update(Request $request)
    {
        $request->validate([
            'student_id' => 'required|exists:students,id',
            'name' => 'required|min:3',
            'brithday' => 'nullable|date',
            'phone' => 'required|min:11',
            'type' => 'required|in:' . getTypesInString(getStudentTypes()),
            'note' => 'nullable',
            'group_id' => 'required|exists:groups,id'
        ]);

        $student = Student::find($request->student_id);

        $student->update([
            'name' => $request->name,
            'brithday' => $request->brithday,
            'phone' => $request->phone,
            'type' => $request->type,
            'group_id' => $request->group_id,
            'note' => $request->note,
        ]);

        Alert::success('نجاح', 'تمت العملية بنجاح');
        return redirect(route('admin.student.index'));
    }

    public function delete(Request $request)
    {
        $request->validate([
            'id' => 'required|exists:students,id',
        ]);

        $student = Student::find($request->id);
        $student->delete();

        Alert::success('نجاح', 'تمت العملية بنجاح');
        return redirect()->back();
    }
}
