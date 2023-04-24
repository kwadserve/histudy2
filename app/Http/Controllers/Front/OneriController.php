<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\OneriIcerik;
use App\Models\OneriKisi;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class OneriController extends Controller
{
    public function add(Request $request)
    {
        $valid = $request->validate([
            "name" => "required",
            "surname" => "required",
            "phone" => "required",
            "email" => "required",
            "burn" => "required",
        ], [
            "name.required" => "İsim boş bırakılamaz.",
            "surname.required" => "Soy isim boş bırakılamaz.",
            "phone.required" => "Telefon boş bırakılamaz.",
            "email.required" => "Email boş bırakılamaz.",
            "burn.required" => "Doğum tarihi boş bırakılamaz.",
        ]);
        if ($valid) {
            OneriKisi::create([
                "name" => $request->name,
                "surname" => $request->surname,
                "phone" => $request->phone,
                "email" => $request->email,
                "burn" => $request->dogum,
            ]);

            $id = OneriKisi::latest()->first();

            foreach ($request->seminer as $key)
                OneriIcerik::create([
                    "title" => $key,
                    "oneri_kisi_id" => $id->id
                ]);
            Alert::success('Başarılı', 'Seminer talebi başarıyla gönderildi.');
            return redirect()->route('front.oner');
        }
    }
}
