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
                    <form action="{{ route('Exam.store') }}" method="post" class="form-horizontal">
                        @csrf

                        <div class="row form-group">
                            <div class="col col-md-12">
                                <div class="input-group">
                                    <div class="input-group-addon">المعلم</div>
                                    <input type="text" id="teacher" name="teacher" class="form-control">
                                </div>
                                @error('teacher')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col col-md-12">
                                <div class="input-group">
                                    <div class="input-group-addon">العنوان</div>
                                    <input type="text" id="title" name="title" class="form-control">
                                </div>
                                @error('title')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>


                        <div class="row form-group">
                            <div class="col col-md-12">
                                <div class="input-group">
                                    <div class="input-group-addon"> أعلى درجه</div>
                                    <input type="number" id="max_mark" name="max_mark" class="form-control">
                                </div>
                                @error('max_mark')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col col-md-12">
                                <div class="input-group">
                                    <div class="input-group-addon"> اقل درجه</div>
                                    <input type="number" id="min_mark" name="min_mark" class="form-control">
                                </div>
                                @error('min_mark')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>


                        <div class="row form-group">
                            <div class="col col-md-12" style="text-align: right">
                                <label>ملاحظة</label>
                                <div class="input-group">
                                    <textarea class="form-control" name="note" id="note" cols="30" rows="10">
                                                        
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
