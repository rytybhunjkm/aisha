<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamStudent extends Model
{
    use HasFactory;

    protected $fillable = ['exam_id', 'student_id', 'memorized', 'note', 'degree', 'date'];

    public function exam()
    {
        return $this->belongsTo(Exam::class,'exam_id');
    }
    public function student()
    {
        return $this->belongsTo(Student::class,'student_id');
    }
}
