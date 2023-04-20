<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\CourseContent;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function course_list(){
        $course = Course::get();
        $course_content = CourseContent::get();
        return view('frontend.course.list',compact('course','course_content'));
    }

    public function detail(){
        $data = Course::find(1);
        $icerik = CourseContent::where('course_id',1)->get();
        return view('frontend.course.detail',compact('data','icerik'));
    }
}
