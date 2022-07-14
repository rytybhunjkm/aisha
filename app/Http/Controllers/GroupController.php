<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Teacher;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

use function Ramsey\Uuid\v1;

class GroupController extends Controller
{
    public function index()
    {
        $groups = Group::get();

        return view('admin.pages.group.index', [
            'groups' => $groups
        ]);
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
            'type' => 'required|in:kids,mid,mom',
            'note' => 'nullable'
        ]);


        Group::create([
            'teacher_id' => $request->teacher_id,
            'name' => $request->name,
            'type' => $request->type,
            'note' => $request->note,
        ]);

        Alert::success('نجاح', 'تمت العملية بنجاح');
        return redirect(route('group.index'));
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
