@extends('admin.master')

@section('css')
@endsection

@section('content')
      <div class="row" style="direction: rtl;text-align:right">
            <div class="col">
                  <div class="card">
                        <div class="card-header bg-primary text-light" style="text-align: right">
                              إضافة معلم
                        </div>
                        <div class="card-body card-block">
                              <form action="{{ route('teacher.store') }}" method="post" class="form-horizontal">
                                    @csrf

                                    <div class="row form-group">
                                          <div class="col col-md-12">
                                                <div class="input-group">
                                                      <div class="input-group-addon">الإسم</div>
                                                      <input type="text" id="name" name="name"
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
                                                      <div class="input-group-addon">تاريخ الميلاد</div>
                                                      <input type="date" id="birthday" name="birthday"
                                                            class="form-control">
                                                </div>
                                                @error('birthday')
                                                      <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                          </div>
                                    </div>


                                    <div class="row form-group">
                                          <div class="col col-md-12">
                                                <div class="input-group">
                                                      <div class="input-group-addon">الهاتف</div>
                                                      <input type="text" id="phone" name="phone"
                                                            class="form-control">
                                                </div>
                                                @error('phone')
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
