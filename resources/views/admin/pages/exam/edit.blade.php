@extends('admin.master')

@section('css')
@endsection

@section('content')
    <div class="row" style="direction: rtl;text-align:right">
        <div class="col">
            <div class="card">
                <div class="card-header bg-primary text-light" style="text-align: right">
                    الاختبار </div>
                <div class="card-body card-block">
                    <form action="{{ route('admin.exam.update') }}" method="post" class="form-horizontal">
                        @csrf
                        @method('PUT')


                        <input type="hidden" name="exam_id" value="{{ $exam->id }}">
                        <div class="row form-group">
                            <div class="col col-md-12">
                                <select class="form-control" name="teacher_name" id="teacher_name">
                                    <option value="">اختر المعلم</option>
                                    @foreach ($teachers as $teacher)
                                        <option {{ $teacher->name == $exam->teacher ? 'selected' : '' }}
                                            value="{{ $teacher->name }}">
                                            {{ $teacher->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('teacher_name')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>


                        <x-form.text name="title" label="العنوان" :value="$exam->title" />


                        <x-form.number name="max_mark" label="اعلى درجة" :value="$exam->max_mark" />


                        <x-form.number name="min_mark" label="اقل درجة" :value="$exam->min_mark" />


                        <x-form.textarea name="note" label="ملاحظة" :value="$exam->note" />

                </div>
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
