@extends('admin.master')

@section('css')
@endsection

@section('content')
    <div class="row" style="direction: rtl;text-align:right">
        <div class="col">
            <div class="card">
                <div class="card-header bg-primary text-light" style="text-align: right">
                    إضافة طالب
                </div>
                <div class="card-body card-block">
                    <form action="{{ route('admin.student.store') }}" method="post" class="form-horizontal">
                        @csrf

                        <x-form.text name="name" label="الإسم" :value="old('name')" />
                        
                        
                        
                        <div class="row form-group">
                            <div class="col col-md-12">
                                <div class="input-group">
                                    <div class="input-group-addon">تاريخ الميلاد</div>
                                    <input type="date" id="brithday" name="brithday" class="form-control" value="{{old('brithday')}}">
                                </div>
                                @error('brithday')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>


                        
                        <x-form.text name="phone" label="الهاتف" :value="old('phone')" />
                        
                        
                        
                        <div class="row form-group">
                            <div class="col col-md-12">
                                <select class="form-control" name="type" id="type">
                                    <option value="">اختر النوع</option>
                                    @foreach (getStudentTypes() as $enType => $arType)
                                    
                                        <option {{ $enType == old('type') ? 'selected' : '' }}
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




                        <div class="row form-group">
                              <div class="col col-md-12">
                                    <select class="form-control" name="group_id" id="group_id">
                                          <option value="">اختر المجموعه</option>
                                          @foreach ($groups as  $group)
                                                <option
                                                      {{ $group->id == old('group_id') ? 'selected' : '' }}
                                                      value="{{ $group->id }}">
                                                      {{ $group->name }}
                                                </option>
                                          @endforeach
                                    </select>
                                    @error('group_id')
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
