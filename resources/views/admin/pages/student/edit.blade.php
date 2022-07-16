@extends('admin.master')

@section('css')
@endsection

@section('content')
    <div class="row" style="direction: rtl;text-align:right">
        <div class="col">
            <div class="card">
                <div class="card-header bg-primary text-light" style="text-align: right">
                  تعديل طالب
                </div>
                <div class="card-body card-block">
                    <form action="{{ route('admin.student.update') }}" method="post" class="form-horizontal">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="student_id">

                        <x-form.text name="name" label="الإسم" :value="old('name')" />
                        
                        <x-form.date name="brithday" label="تاريخ الميلاد" :value="old('brithday')" />
                        
                        <x-form.text name="phone" label="الهاتف" :value="old('phone')" />

                        <x-form.select-array name="type" :array="getStudentTypes()" label="اختر النوع" :selected="old('type')" />

                        <x-form.select-object name="group_id" label="اختر المجموعة" :collection="$groups" field="name" :selected="old('group_id')" />

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
