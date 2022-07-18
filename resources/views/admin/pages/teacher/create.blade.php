@extends('admin.master')

@section('css')
@endsection

@section('content')
    <div class="row" style="direction: rtl;text-align:right">
        <div class="col">
            <div class="card">
                <div class="card-header bg-primary text-light" style="text-align: right">
                    إضافة معلم
                </div>
                <div class="card-body card-block">
                    <form action="{{ route('admin.teacher.store') }}" method="post" class="form-horizontal">
                        @csrf
                        <x-form.text name="name" label="الإسم" :value="old('name')" />

                        <x-form.date name="birthday" label="تاريخ الميلاد" :value="old('birthday')" />

                        <x-form.text name="phone" label="الهاتف" :value="old('phone')" />

                        <x-form.textarea name="note" label="ملاحظة" :value="old('note')" />

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
