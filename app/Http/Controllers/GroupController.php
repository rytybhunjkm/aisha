<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Teacher;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class GroupController extends Controller
{
    public function index()
    {
    }

    public function create()
    {
        $teachers = Teacher::get();
        return view('admin.pages.group.create', [
            'teachers' => $teachers
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3',
            'teacher_id' => 'required|exists:teachers,id',
            'note' => 'nullable'
        ]);


        Group::create([
            'teacher_id' => $request->teacher_id,
            'name' => $request->name,
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
