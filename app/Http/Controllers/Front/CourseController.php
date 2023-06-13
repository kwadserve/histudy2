<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\CourseContent;
use App\Models\Ogrenci;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
    public function course_list(){
        $count = Course::count();
        $course = Course::get();
        $course_content = CourseContent::get();
        return view('frontend.course.list',compact('course','course_content','count'));
    }

    public function detail($id){
        $son_kurslar = Course::latest()->take(3)->get();
        $data = Course::find($id);
        $icerik = CourseContent::where('course_id',$id)->get();
        return view('frontend.course.detail',compact('data','icerik','son_kurslar'));
    }

    public function oner(){
        return view('frontend.course.oneri');
    }

    public function kurs_sepet($id){

        $o_id = Auth::guard('ogrenci')->user()->id;
        
        $kisi = Ogrenci::where('id',$o_id)->get();
        $kurs = Course::where('id',$id)->get();
        return view('frontend.course.kurs_sepet',compact('kisi','kurs'));
    }
}
