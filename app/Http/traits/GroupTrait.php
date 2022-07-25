<?php
namespace App\Http\traits;

use App\Models\Group;


trait GroupTrait
{
    private function GetGroup(){

        return  Group::get();

    }
}
