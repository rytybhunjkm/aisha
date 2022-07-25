@extends('admin.master')

@section('css')
@endsection

@section('content')
    <div class="row" style="direction: rtl;text-align:right">
        <div class="col">
            <div class="card">
                <div class="card-header bg-primary text-light" style="text-align: right">
                    تعديل المدفوعات
                </div>
                <div class="card-body card-block">
                    <form action="{{ route('admin.Payment.update') }}" method="post" class="form-horizontal">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="payments_id" value="{{ $payments->id }}">



                        <x-form.select-object name="student_id" label="اختر الطالب" :collection="$students" field="name"
                            :selected="$payments->student_id" />

                        <x-form.number name="payed" label="الدفع" :value="$payments->payed" />

                        <x-form.number name="month" label="الشهر" :value="$payments->month" />

                        <x-form.textarea name="onte" label="ملاحظة" :value="$payments->onte" />

                        <div class="m-3">
                            <button type="submit" class="btn btn-success float-right">
                                Submit
                            </button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection


@section('javascript')
@endsection
