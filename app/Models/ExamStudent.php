<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamStudent extends Model
{
    use HasFactory;

    protected $fillable = ['exam_id', 'student_id', 'memorized', 'note', 'degree', 'date'];
}
