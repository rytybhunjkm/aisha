@extends('admin.master')

@section('css')
@endsection

@section('content')
    <div class="row" style="direction: rtl;text-align:right">
        <div class="col">
            <div class="card">
                <div class="card-header bg-primary text-light" style="text-align: right">
                    إضافة درس
                </div>


                <div class="card-body card-block">
                    <form action="{{ route('admin.lesson.store') }}" method="post" class="form-horizontal">
                        @csrf

                        <x-form.select-array name="day" :array="getLessonDay()" label="اختر ايام الحضور " :selected="old('day')" />

                        <x-form.select-object name="group_id" label="اختر المجموعة" :collection="$groups" field="name" :selected="old('group_id')" />

                        <x-form.time name="from" label="من" :value="old('from')" />

                        <x-form.time name="to" label="إلى" :value="old('to')" />

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
