<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function add(){
        return view('backend.teacher.add');
    }

    public function list(){
        return view('backend.teacher.list');
    }
}
