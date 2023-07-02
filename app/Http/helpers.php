<?php

use App\Models\Course;
use App\Models\Teacher;
use Illuminate\Support\Str;

if(!function_exists('hocaLink')){
    function hocaLink($id){
        $hoca = Teacher::find($id);
        $link = Str::slug($hoca->name.' '.$hoca->surname);
        return $link;
    }
}

if(!function_exists('seminerLink')){
    function seminerLink($id){
        $seminer = Course::find($id);
        $link = Str::slug($seminer->title);
        return $link;
    }
}


?>