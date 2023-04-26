<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use RealRashid\SweetAlert\Facades\Alert;

class TeacherController extends Controller
{
    public function add(){
        return view('backend.teacher.add');
    }

    public function list(){
        $data = Teacher::get();
        return view('backend.teacher.list',compact('data'));
    }

    public function store(Request $request){
        $valid = $request->validate([
            "name"=>"required",
            "surname"=>"required",
            "email"=>"required",
            "phone"=>"required",
            "job"=>"required",
            "description"=>"required",
        ],[
            "name.required" => "İsim boş bırakıldı!",
            "surname.required" => "Soy isim boş bırakıldı!",
            "email.required" => "Email boş bırakıldı!",
            "phone.required" => "Telefon boş bırakıldı!",
            "job.required" => "Meslek boş bırakıldı!",
            "description.required" => "Açıklama boş bırakıldı!",
        ]);

        if($valid){

            if($request->file('image') != null){

                $image = $request->file('image');
                $image_name = hexdec(uniqid()).".".$image->getClientOriginalExtension();
                $save_url = "/images/uploads/teacher_images/".$image_name;
                $create = Image::make($image)->resize(415,555)->save('assets/images/uploads/teacher_images/'.$image_name);
                Teacher::create([
                    "name" => $request->name,
                    "surname" => $request->surname,
                    "email" => $request->email,
                    "phone" => $request->phone,
                    "job" => $request->job,
                    "photo" => $save_url,
                    "description" => $request->description,
                    "instagram" => $request->instagram,
                    "facebook" => $request->facebook,
                    "twitter" => $request->twitter,
                    "linkedin" => $request->linkedin
                ]);
            }
            if($request->file('image') == null){
                $create = Teacher::create([
                    "name" => $request->name,
                    "surname" => $request->surname,
                    "email" => $request->email,
                    "phone" => $request->phone,
                    "job" => $request->job,
                    "description" => $request->description,
                    "instagram" => $request->instagram,
                    "facebook" => $request->facebook,
                    "twitter" => $request->twitter,
                    "linkedin" => $request->linkedin
                ]);
            }
            if($create){
                Alert::success('Başarılı','Öğretmen ekleme işlemi başarılı');
                return redirect()->route('panel.teacher.list');
            }
        }
    }
}
