@include('admin.layouts.head')

@include('admin.layouts.side')
<!-- Right Panel -->
<div id="right-panel" class="right-panel">

    @include('admin.layouts.nav')
    <!-- Content -->
    <div class="content">
        <!-- Animated -->
        <div class="animated fadeIn">
            <form action="{{ route('admin.examstudent.update') }}" method="post" class="form-horizontal">
                @csrf
                @method('PUT')

                <input type="hidden" name="examstudent_id" value="{{ $examstudents->id }}">


                <x-form.select-object name="exam_id" label="اختر الامتحان" :collection="$exams" field="title"
                    :selected="$examstudents->exam_id" />

                <x-form.select-object name="student_id" label="اختر الطالب" :collection="$students" field="name"
                    :selected="$examstudents->student_id" />

                <x-form.text name="memorized" label="memorized" :value="$examstudents->memorized" />


                <x-form.number name="degree" label="الدرجة" :value="$examstudents->degree" />



                <x-form.date name="date" label="تاريخ" :value="$examstudents->date" />


                <x-form.textarea name="note" label="ملاحظة" :value="$examstudents->note" />

                <div class="m-3">
                    <button type="submit" class="btn btn-success float-right">
                        Submit
                    </button>
                </div>
            </form>
        </div>
        <!-- .animated -->
    </div>

    @include('admin.layouts.footer')
