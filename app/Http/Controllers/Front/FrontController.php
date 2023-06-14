<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Course;
use App\Models\OgrenciKurs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class FrontController extends Controller
{
    public function homepage(){
        $uc_kurs = Course::orderBy('price','asc')->take(5)->get();
        $categories = Category::get();
        $son_kurslar = Course::inRandomOrder()->take(6)->get();
        return view('frontend.home',compact('uc_kurs','categories','son_kurslar'));
    }

    public function about(){
        return view('frontend.about');
    }

    public function contact(){
        return view('frontend.iletisim');
    }

    public function ogr_basvuru(){
        return view('frontend.teacher.basvuru');
    }

    public function login(){
        return view('frontend.login');
    }

    public function register(){
        return view('frontend.register');
    }
    public function search_post(Request $request){
        $data = $request->search;

        $course = Course::where('title','like','%'.$data.'%')->get();
        return view('frontend.course.list',compact('course'));
    }

    public function ogrenci_kurs_ekle($id){
        OgrenciKurs::create([
            "ogr_id" => Auth::guard('ogrenci')->user()->id,
            "kurs_id" => $id,
        ]);
        Alert::success('Başaılı',"Kurs başarıyla eklendi.");
        return back();
    }

    public function gizlilik(){
        return view('frontend.gizlilik');
    }
    public function kullanim(){
        return view('frontend.kullanim_kosul');
    }
    public function mesafeli(){
        return view('frontend.mesafeli_satis');
    }
}
