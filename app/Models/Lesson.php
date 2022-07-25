<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;
    protected $fillable = ['day', 'from', 'to', 'group_id', 'note'];

    public function group()
    {
        return $this->belongsTo(Group::class, 'group_id');
    }
}
