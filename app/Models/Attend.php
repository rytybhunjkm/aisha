<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attend extends Model
{
    use HasFactory;
    protected $fillable = [
        'student_id',
        'lesson_id',
        'date',
        'attend',
        'note'

    ];

    public function student()
    {
        return $this->belongsTo(Student::class, 'student_id');
    }
    public function lesson()
    {
        return $this->belongsTo(Lesson::class, 'lesson_id');
    }
}
