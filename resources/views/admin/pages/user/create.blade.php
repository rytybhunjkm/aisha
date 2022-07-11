@extends('admin.master')

@section('css')
@endsection

@section('content')
    <div class="row" style="direction: rtl;text-align:right">
        <div class="col">
            <div class="card">
                <div class="card-header bg-primary text-light" style="text-align: right">
                    إضافة مستخدم
                </div>
                <div class="card-body card-block">
                    <form action="{{ route('User.store') }}" method="post" class="form-horizontal">
                        @csrf

                        <div class="row form-group">
                            <div class="col col-md-12">
                                <div class="input-group">
                                    <div class="input-group-addon">الإسم</div>
                                    <input type="text" id="name" name="name" class="form-control">
                                </div>
                                @error('name')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col col-md-12">
                                <div class="input-group">
                                    <div class="input-group-addon">البريد الالكتروني</div>
                                    <input type="email" id="email" name="email" class="form-control">
                                </div>
                                @error('email')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>



                        <div class="row form-group">
                            <div class="col col-md-12">
                                <div class="input-group">
                                    <div class="input-group-addon">كلمه السر</div>
                                    <input type="password" id="password" name="password" class="form-control">
                                </div>
                                @error('password')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col col-md-12">
                                <div class="input-group">
                                    <div class="input-group-addon">اعد كتابه كلمه السر</div>
                                    <input type="password" id="password" name="password_confirm" class="form-control">
                                </div>
                                @error('password_confirm')
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
