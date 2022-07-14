<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'brithday', 'phone','type','group_id', 'note'];

    public function group()
    {
        return $this->belongsTo(Group::class,'group_id');
    }
}
