@extends('admin.master')

@section('css')
@endsection

@section('content')
    <div class="row" style="direction: rtl;text-align:right">
        <div class="col">
            <div class="card">
                <div class="card-header bg-primary text-light" style="text-align: right">
                    اختبار الطالب</div>
                <div class="card-body card-block">
                    <form action="{{ route('admin.examstudent.store') }}" method="post" class="form-horizontal">
                        @csrf

                        <x-form.select-object name="exam_id" label="اختر الامتحان" :collection="$exams" field="title"
                            :selected="old('exam_id')" />

                        <x-form.select-object name="student_id" label="اختر الطالب" :collection="$students" field="name"
                            :selected="old('student_id')" />

                        <x-form.text name="memorized" label="memorized" :value="old('memorized')" />

                        <x-form.number name="degree" label="الدرجة" :value="old('degree')" />

                        <x-form.date name="date" label="تاريخ" :value="old('date')" />

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
