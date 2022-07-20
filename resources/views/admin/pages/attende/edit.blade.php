@extends('admin.master')

@section('css')
@endsection

@section('content')
    <div class="row" style="direction: rtl;text-align:right">
        <div class="col">
            <div class="card">
                <div class="card-header bg-primary text-light" style="text-align: right">
                    الحضور
                </div>
                <div class="card-body card-block">
                    <form action="{{ route('admin.attend.update') }}" method="post" class="form-horizontal">
                        @csrf
                        @method('PUT')

                        <input type="hidden" name="attend_id" value="{{ $attend->id }}">

                        <div class="row form-group">
                            <div class="col col-md-12">
                                <select class="form-control" name="student_id" id="student_id">
                                    <option value="">اختر الطالب</option>
                                    @foreach ($students as $student)
                                        <option {{ $student->id == $attend->student_id ? 'selected' : '' }}
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


                        <div class="row form-group">
                            <div class="col col-md-12">
                                <select class="form-control" name="lesson_id" id="lesson_id">
                                    <option value=""> اختر الدرس</option>
                                    @foreach ($lessons as $lesson)
                                        <option {{ $lesson->id == $attend->lesson_id ? 'selected' : '' }}
                                            value="{{ $lesson->id }}">
                                            {{ $lesson->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('lesson_id')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>




                        <div class="row form-group">
                            <div class="col col-md-12">
                                <div class="input-group">
                                    <div class="input-group-addon">تاريخ الميلاد</div>
                                    <input type="date" id="date" name="date" class="form-control"
                                        value="{{ $attend->date }}">
                                </div>
                                @error('date')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>


                        <div class="row form-group">
                            <div class="col col-md-6">
                                <div class="input-group">
                                    <div class="input-group-addon">الحضور</div>
                                    <input class="mr-4" type="checkbox" id="attend" name="attend"
                                        {{ $attend->attend == 1 ? 'checked' : '' }} value="1">
                                </div>
                                @error('attend')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>







                        <div class="row form-group">
                            <div class="col col-md-12" style="text-align: right">
                                <label>ملاحظة</label>
                                <div class="input-group">
                                    <textarea class="form-control" name="note" id="note" cols="30" rows="10">
                                        {{ $attend->note }}
                                    </textarea>
                                </div>
                                @error('note')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
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
