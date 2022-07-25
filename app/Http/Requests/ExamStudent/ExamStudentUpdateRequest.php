<?php

namespace App\Http\Requests\ExamStudent;

use Illuminate\Foundation\Http\FormRequest;

class ExamStudentUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'exam_id' => 'required|exists:exams,id',
            'student_id' => 'required|exists:students,id',
            'memorized' => 'required',
            'degree' => 'required',
            'date' => 'required|date',
            'note' => 'nullable'
        ];
    }

    public function messages()
    {
        return [
            'exam_id.required' => 'هذه الخانة مطلوبة',
            'student_id.required' => 'هذه الخانه مطلوبة',
            'memorized.required' => 'هذه الخانه مطلوبة',
            'date.required' => 'هذه الخانه مطلوبة',
            'degree.numeric' => 'هذه الخانه مطلوبة كرقم',
            'date.date' => 'هذه الخانه يجب ان تكون تاريخ',
        ];
    }
}
