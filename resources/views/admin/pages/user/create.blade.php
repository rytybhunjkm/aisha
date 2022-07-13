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
                    <form action="{{ route('user.store') }}" method="post" class="form-horizontal">
                        @csrf

                        <x-form.text name="name" label="الإسم" />

                        <x-form.email name="email" label="البريد الالكتروني" />

                        <x-form.password name="password" label="كلمه السر" />

                        <x-form.password name="password_confirmation" label="اعد كتابه كلمه السر" />

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
