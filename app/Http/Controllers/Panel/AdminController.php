<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Ogrenci;
use App\Models\Teacher;
use App\Models\Course;

class AdminController extends Controller
{
    public function admin_login(){
		return view('frontend.admin_login');
	}
	
	public function admin_login_post(Request $request){
		if(Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])){
			return redirect()->route('panel.home');
		}else{
			return back()->withErrors('Email veya şifre hatalı.');	
		}
	}
	
	public function logout(){
	Auth::guard('admin')->logout();	
	return redirect()->route('panel.login');
	}
	
	
	public function anasayfa(){
		$ogrenciler = Ogrenci::latest()->get();
		$ogretmenler = Teacher::latest()->get();
		$kurslar = Course::latest()->get();
		$kurs_sayac = Course::count();
		$ogretmen_sayac = Teacher::count();
		$ogrenci_sayac = Ogrenci::count();
		return view('backend.home',compact('ogrenciler','ogretmenler','kurslar','kurs_sayac','ogrenci_sayac','ogretmen_sayac'));
	}
}
