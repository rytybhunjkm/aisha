<?php
namespace App\Http\traits;

use App\Models\Lesson;

trait lessonTrait
{
    private function getLessons(){

        return  Lesson::get();

    }
}
