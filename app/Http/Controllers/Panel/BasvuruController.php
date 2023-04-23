<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Models\TeacherFormIcerik;
use Illuminate\Http\Request;

class BasvuruController extends Controller
{
    public function list(){
        $data = TeacherFormIcerik::latest()->get();
        return view('backend.basvuru.list',compact('data'));
    }
}
