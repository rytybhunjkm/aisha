<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    
    protected $fillable = ['student_id', 'payed', 'month', 'onte'];

    public function student()
    {
        return $this->belongsTo(Student::class,'student_id');
    }


 
}
