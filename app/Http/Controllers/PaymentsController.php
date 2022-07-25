<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Student;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class PaymentsController extends Controller
{
    public function index()
    {

        $payments = Payment::get();
        return view('admin.pages.Payment.index', [
            'payments' => $payments,
        ]);
    }

    public function create()
    {

        $students = Student::get();
        return view('admin.pages.Payment.create', [
            'students' => $students,
        ]);
    }

    public function store(Request $request)
    {

        $request->validate([
            
            'student_id' => 'required|exists:students,id',
            'payed'      => 'required',
            'month'      =>  'required',
            'onte'       => 'nullable'
            
        ]);
        
        Payment::create([
            
            'student_id' => $request->student_id,
            'payed'      => $request->payed,
            'month'      => $request->month,
            'onte'       => $request->onte
            
        ]);
       
        Alert::success('نجاح', 'تمت العملية بنجاح');
        return redirect(route('admin.Payment.index'));
    }

    public function edit($id)
    {
        $students = Student::get();
        $payment  = Payment::find($id);
        return view('admin.pages.Payment.edit', [
            'students' => $students,
            'payments' => $payment

        ]);
    }

    public function update(Request $request)
    {
        $request->validate([
            'payments_id'=>'required|exists:payments,id',
            'student_id' => 'required|exists:students,id',
            'payed'      => 'required',
            'month'      =>  'required',
            'onte'       => 'nullable'
            
        ]);

        $payments = Payment::find($request->payments_id);
        
      
        $payments->update([
            'student_id' => $request->student_id,
            'payed'      => $request->payed,
            'month'      => $request->month,
            'onte'       => $request->onte
            
        ]);

        Alert::success('نجاح', 'تمت العملية بنجاح');
        return redirect(route('admin.Payment.index'));



    }

    public function delete(Request $request)
    {
        $request->validate([
            'id' => 'required|exists:payments,id'
        ]);
        $payment = Payment::find($request->id);
        $payment->delete();
      
        
        Alert::success('نجاح', 'تمت العملية بنجاح');
        
        return redirect()->back();
    }
}
