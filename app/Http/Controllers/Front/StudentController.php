<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class StudentController extends Controller
{
    public function store(Request $request){
        $valid = $request->validate([
            "name"=>"required",
            "surname"=>"required",
            "email"=>"required",
            "phone"=>"required",
            "password"=>"required",
            "password_confirm"=>"same:password",
        ],[
            "name.required" => "İsim boş bırakılamaz.",
            "surname.required" => "Soy isim boş bırakılamaz.",
            "email.required" => "Email boş bırakılamaz.",
            "phone.required" => "Telefon boş bırakılamaz.",
            "password.required" => "Şifre boş bırakılamaz.",
            "password_confirm.required" => "Şifre boş bırakılamaz.",
            "password_confirm.same" => "Şifreler uyuşmuyor.",
        ]);

        if($valid){
            Alert::success('başarılı','devam');
            return back();
        }
        else{
            Alert::error('hata','hata');
            return back();
        }
    }
}
