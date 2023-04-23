<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\TeacherForm;
use App\Models\TeacherFormIcerik;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class TeacherBasvuru extends Controller
{
    public function add(Request $request){
        TeacherForm::create([
            "name" => $request->name,
            "surname" => $request->surname,
            "email" => $request->email,
            "phone" => $request->phone,
            "job" => $request->job,
        ]);

        $id = TeacherForm::latest()->first();

        foreach($request->seminer as $key){
            TeacherFormIcerik::create([
                "title" => $key,
                "teacher_form_id" => $id->id

            ]);
        }
        Alert::success('Başarılı','Başvuru gönderildi.');
        return back();

    }


}
