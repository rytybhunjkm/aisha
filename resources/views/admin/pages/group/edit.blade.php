@extends('admin.master')

@section('css')
@endsection

@section('content')
    <div class="row" style="direction: rtl;text-align:right">
        <div class="col">
            <div class="card">
                <div class="card-header bg-primary text-light" style="text-align: right">
                    المجموعات </div>
                <div class="card-body card-block">
                    <form action="{{ route('admin.group.update') }}" method="post" class="form-horizontal">
                        @csrf
                        @method('PUT')

                        <input type="hidden" name="group_id" value="{{ $groups->id }}">

                        <x-form.text name="name" label="اسم المجموعة" :value="$groups->name" />


                        <div class="row form-group">
                            <div class="col col-md-12">
                                <select class="form-control" name="teacher_id" id="teacher_id">
                                    <option value="">اختر المعلم</option>
                                    @foreach ($teachers as $key => $teacher)
                                        <option {{ $groups->teacher_id == $teacher->id ? 'selected' : '' }}
                                            value="{{ $teacher->id }}">
                                            {{ $teacher->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('teacher_id')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>


                        <div class="row form-group">
                            <div class="col col-md-12">
                                <select class="form-control" name="type" id="type">
                                    <option value="">اختر النوع</option>
                                    @foreach (getGroupTypes() as $enType => $arType)
                                        <option {{ $enType == $groups->type ? 'selected' : '' }}
                                            value="{{ $enType }}">
                                            {{ $arType }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('type')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <x-form.textarea name="note" label="ملاحظة" :value="$groups->note" />

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
