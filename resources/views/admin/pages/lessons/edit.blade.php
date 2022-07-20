@extends('admin.master')

@section('css')
@endsection

@section('content')
    <div class="row" style="direction: rtl;text-align:right">
        <div class="col">
            <div class="card">
                <div class="card-header bg-primary text-light" style="text-align: right">
                    تعديل الدرس
                </div>
                <div class="card-body card-block">
                    <form action="{{ route('admin.lesson.update') }}" method="post" class="form-horizontal">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="lessons_id" value="{{ $lessons->id }}">

                        <x-form.select-array name="day" :array="getLessonDay()" label="اختر ايام الحضور " :selected="$lessons->day" />

                        <x-form.select-object name="group_id" label="اختر المجموعة" :collection="$groups" field="name"
                            :selected="$lessons->group_id" />

                        <x-form.time name="from" label="من" :value="$lessons->from" />

                        <x-form.time name="to" label="إلى" :value="$lessons->to" />

                        <x-form.textarea name="note" label="ملاحظة" :value="$lessons->note" />


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
