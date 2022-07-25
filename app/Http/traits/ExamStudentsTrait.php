<?php
namespace App\Http\traits;

use App\Models\ExamStudent;


trait ExamStudentsTrait
{
    private function GetExamStudent(){

        return  ExamStudent::get();

    }
}
