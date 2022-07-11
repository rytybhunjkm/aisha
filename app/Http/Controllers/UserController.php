<?php

namespace App\Http\Controllers;

use RealRashid\SweetAlert\Facades\Alert;

use App\Models\User;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('admin.pages.user.index');
    }

    public function create()
    {
        return view('admin.pages.user.create');
    }

    public function store(Request $request)
    {
        $request->validate([

            'name' => 'required|min:3',
            'email' => 'required|email',
            'password' => [
                'required',
                'min:3'
            ],
            'password_confirm' => 'required|same:password'
        ]);

        User::create([

            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'password_confirm' => $request->password_confirm
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
