<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Ogrenci;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class StudentController extends Controller
{
    public function store(Request $request)
    {
        $valid = $request->validate([
            "name" => "required",
            "surname" => "required",
            "email" => "required",
            "phone" => "required",
            "password" => "required",
            "password_confirm" => "same:password",
        ], [
            "name.required" => "İsim boş bırakılamaz.",
            "surname.required" => "Soy isim boş bırakılamaz.",
            "email.required" => "Email boş bırakılamaz.",
            "phone.required" => "Telefon boş bırakılamaz.",
            "password.required" => "Şifre boş bırakılamaz.",
            "password_confirm.required" => "Şifre boş bırakılamaz.",
            "password_confirm.same" => "Şifreler uyuşmuyor.",
        ]);

        if ($valid) {
            $create = Ogrenci::create([
                "name" => $request->name,
                "surname" => $request->surname,
                "email" => $request->email,
                "address" => $request->address,
                "phone" => $request->phone,
                "password" => Hash::make($request->password),
            ]);

            if ($create) {
                return redirect()->route('front.home');
            }
        }
    }

    public function login_post(Request $request)
    {
        $valid = $request->validate([
            'email' => 'required',
            'password' => 'required',
            'g-recaptcha-response' => 'required|captcha'

        ], [
            "email.required" => "Email boş bırakıldı",
            "password.required" => "Şifre boş bırakıldı",
            'g-recaptcha-response' => [
                'required' => 'Lütfen robot olmadığınızı doğrulayın.',
                'captcha' => 'CAPTCHA hatası! daha sonra tekrar deneyin veya site yöneticisi ile iletişime geçin.',
            ]
        ]);

        $data = explode('/', $request->url);

        if ($valid) {
            if (Auth::guard('ogrenci')->attempt(['email' => $request->email, 'password' => $request->password])) {
                if ($data[3] == "seminer" && $data[4] == "detay") {
                    return redirect()->route('kurs.sepet', $data[5]);
                } else {
                    return redirect($request->url);
                }
            } else {
                return back()->withErrors("Email ya da şifre hatalı");
            }
        }
    }

    public function logout()
    {
        Auth::guard('ogrenci')->logout();
        return redirect()->route('front.login');
    }
}
