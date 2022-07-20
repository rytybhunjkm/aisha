@include('admin.layouts.head')

@include('admin.layouts.side')
<!-- Right Panel -->
<div id="right-panel" class="right-panel">

    @include('admin.layouts.nav')
    <div class="row" style="direction: rtl;text-align:right">
        <div class="col">
            <div class="card">
                <div class="card-header bg-primary text-light" style="text-align: right">
                    تعديل المعلم
                </div>
                <div class="card-body card-block">
                    <form action="{{ route('admin.teacher.update') }}" method="post" class="form-horizontal">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="teacher_id" value="{{ $teacher->id }}">

                        <x-form.text name="name" label="الإسم" :value="$teacher->name" />

                        <x-form.date name="birthday" label="تاريخ الميلاد" :value="$teacher->birthday" />

                        <x-form.text name="phone" label="الهاتف" :value="$teacher->phone" />

                        <x-form.textarea name="note" label="ملاحظة" :value="$teacher->note" />


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

    @include('admin.layouts.footer')
