<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function teacher_list(){
        $data = Teacher::get();
        return view('frontend.teacher.list',compact('data'));
    }
}
