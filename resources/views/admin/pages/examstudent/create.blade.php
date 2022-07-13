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
                    <form action="{{ route('examstudent.store') }}" method="post" class="form-horizontal">
                        @csrf

                        <div class="row form-group">
                            <div class="col col-md-12">
                                <select class="form-control" name="exam_id" id="exam_id">
                                    <option value="">اختر الامتحان</option>
                                    @foreach ($exams as $exam)
                                        <option {{ $exam->id == old('exam_id') ? 'selected' : '' }}
                                            value="{{ $exam->id }}">
                                            {{ $exam->title }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('exam_id')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>


                        <div class="row form-group">
                            <div class="col col-md-12">
                                <select class="form-control" name="student_id" id="student_id">
                                    <option value="">اختر الطالب</option>
                                    @foreach ($students as $student)
                                        <option {{ $student->name == old('student_id') ? 'selected' : '' }}
                                            value="{{ $student->id }}">
                                            {{ $student->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('student_id')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>


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
