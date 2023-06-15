<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Teacher;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function teacher_list(){
        $data = Teacher::get();
        
        return view('frontend.teacher.list',compact('data'));
    }

    public function teacher_detail($id){
        $data = Teacher::find($id);
        $now = Carbon::now();
        $gecmis_kurslar = Course::query()->where('finish','<',$now)->where('teacher_id',$data->id)->get();
        $simdiki_kurslar = Course::query()->where('start','<',$now)->where('finish','>',$now)->where('teacher_id',$data->id)->get();
        $gelecek_kurslar = Course::query()->where('start','>',$now)->where('teacher_id',$data->id)->get();
        
        return view('frontend.teacher.detail',compact('data','gecmis_kurslar','simdiki_kurslar','gelecek_kurslar'));
    }

    public function teacher_profile($id){
        $data = Teacher::find($id);
        return view('frontend.teacher.profile',compact('data'));
        
    }

    public function teacher_course($id){
        $data = Teacher::find($id);
        $course = Course::where('teacher_id',$id)->get();
        return view('frontend.teacher.detail',compact('data','course'));
    }
}
