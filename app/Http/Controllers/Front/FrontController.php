<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Course;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function homepage(){
        $uc_kurs = Course::latest()->get();
        $categories = Category::get();
        $son_kurslar = Course::latest()->take(6)->get();
        return view('frontend.home',compact('uc_kurs','categories','son_kurslar'));
    }

    public function about(){
        return view('frontend.about');
    }

    public function ogr_basvuru(){
        return view('frontend.teacher.basvuru');
    }

    

    public function blog_list(){
        return view('frontend.blog.list');
    }

    public function contact(){
        return view('frontend.iletisim');
    }

    public function teacher_detail(){
        return view('frontend.teacher.detail');
    }
}
