<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function add(){
        return view('backend.course.add');
    }

    public function list(){
        return view('backend.course.list');
    }
}
