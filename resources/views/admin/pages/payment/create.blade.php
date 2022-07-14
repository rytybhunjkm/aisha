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
                              <form action="{{ route('Lesson.store') }}" method="post" class="form-horizontal">
                                    @csrf

                                    <div class="row form-group">
                                          <div class="col col-md-12">
                                                <select class="form-control" name="day" id="day">
                                                      <option value="">اختر اليوم</option>
                                                      @foreach (getGroupTypes() as $enDay => $arDay)
                                                            <option {{ $enDay == old('day') ? 'selected' : '' }}
                                                                  value="{{ $enDay }}">
                                                                  {{ $arDay }}
                                                            </option>
                                                      @endforeach
                                                </select>
                                                @error('day')
                                                      <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                          </div>
                                    </div>
                                    <div class="row form-group">
                                          <div class="col col-md-12">
                                                <div class="input-group">
                                                      <div class="input-group-addon">من</div>
                                                      <input type="text" id="from" name="from"
                                                            class="form-control">
                                                </div>
                                                @error('name')
                                                      <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                          </div>
                                    </div>
                                    
                                    <div class="row form-group">
                                          <div class="col col-md-12">
                                                <div class="input-group">
                                                      <div class="input-group-addon">الى</div>
                                                      <input type="text" id="to" name="to"
                                                            class="form-control">
                                                </div>
                                                @error('name')
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
