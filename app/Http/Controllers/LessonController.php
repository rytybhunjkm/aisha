<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Lesson;
use Dotenv\Parser\Lexer;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\traits\lessonTrait;
use App\Http\traits\GroupTrait;
class LessonController extends Controller
{
    use lessonTrait;
    use GroupTrait;

    public function index()
    {

        $lessons =$this->getLessons();
        return view('admin.pages.lessons.index', [

            "lessons"  => $lessons,

        ]);
    }

    public function create()
    {

        $groups = $this->GetGroup();
        return view('admin.pages.lessons.create', [
            'groups' =>  $groups
        ]);
    }

    public function store(Request $request)
    {

        $request->validate([
            'day' => 'required|in:' . getTypesInString(getLessonDay()),
            'group_id' => 'required|exists:groups,id',
            'from' => 'required',
            'to' => 'required',
            'note' => 'nullable',
        ]);

        Lesson::create([

            'day' =>  $request->day,
            'group_id' => $request->group_id,
            'from' => $request->from,
            'to' => $request->to,
            'note' =>  $request->note
        ]);
        Alert::success('نجاح', 'تمت العملية بنجاح');
        return redirect(route('admin.lesson.index'));
    }

    public function edit($id)
    {

        $groups =$this->GetGroup();
        $lessons = Lesson::find($id);
        return view('admin.pages.lessons.edit', [
            'groups' => $groups,
            'lessons' => $lessons
        ]);
    }

    public function update(Request $request)
    {
        $request->validate([
            'day' => 'required|in:' . getTypesInString(getLessonDay()),
            'group_id' => 'required|exists:groups,id',
            'from' => 'required',
            'to' => 'required',
            'note' => 'nullable',
        ]);

        $lessons = Lesson::find($request->lessons_id);

        $lessons->update([
            'day' =>  $request->day,
            'group_id' => $request->group_id,
            'from' => $request->from,
            'to' => $request->to,
            'note' =>  $request->note
        ]);


        Alert::success('نجاح', 'تمت العملية بنجاح');
        return redirect(route('admin.lesson.index'));
    }

    public function delete(Request $request)
    {

        $request->validate([
            'id' => 'required|exists:lessons,id',
        ]);

        $lessons = Lesson::find($request->id);
        $lessons->delete();

        Alert::success('نجاح', 'تمت العملية بنجاح');
        return redirect()->back();
    }
}
