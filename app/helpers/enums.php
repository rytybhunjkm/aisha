<?php

if (!function_exists("getGroupTypes")) {
    function getGroupTypes()
    {
        return [
            'kids' => 'اطفال',
            'mid' => 'متوسط',
            'mom' => 'امهات'
        ];
    }
}

if (!function_exists('getTypesInString')) {
    function getTypesInString($data)
    {
        return implode(",", array_keys($data));
    }
}


if (!function_exists('getStudentTypes')) {
    function getStudentTypes()
    {
        return [
            'normal' => 'عادي',
            'dense' => 'مكثف',
        ];
    }
}


if (!function_exists("getLessonDay")) {
    function getLessonDay()
    {
        return [
            'Saturday' => 'السبت',
            'Sunday' => 'الاحد',
            'Monday' => 'الاثنين',
            'Tuesday' => 'الثلاثاء',
            'Wednesday' => 'الاربعاء',
            'Thursday' => 'الخميس',
            'Friday' => 'الجمعة',
        ];
    }
}
