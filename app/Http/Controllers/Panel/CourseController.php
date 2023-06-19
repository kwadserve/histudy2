<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Course;
use App\Models\CourseContent;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use RealRashid\SweetAlert\Facades\Alert;

class CourseController extends Controller
{
    public function add()
    {
        $cat = Category::get();
        $teach = Teacher::get();
        return view('backend.course.add', compact('cat', 'teach'));
    }

    public function store(Request $request)
    {
        $valid = $request->validate([
            "title" => "required",
            "long_description" => "required",
            "teacher" => "required",
            "category" => "required",
            "short_description" => "required",
            "price" => "required",
            "start" => "required",
            "finish" => "required",
        ], [
            "title.required" => "Kurs ismi boş bırakılamaz.",
            "long_description.required" => "Kurs uzun açıklaması boş bırakılamaz.",
            "teacher.required" => "Kurs öğretmeni boş bırakılamaz.",
            "category.required" => "Kurs kategorisi boş bırakılamaz.",
            "short_description.required" => "Kurs kısa açıklaması boş bırakılamaz.",
            "price.required" => "Kurs fiyatı boş bırakılamaz.",
            "start.required" => "Başlangıç tarihi boş bırakılamaz.",
            "finish.required" => "Bitiş tarihi boş bırakılamaz."
        ]);

        

        if ($valid) {
            if ($request->file('image') == null) {

                $create = Course::create([
                    "title" => $request->title,
                    "long_description" => $request->long_description,
                    "teacher_id" => $request->teacher,
                    "category_id" => $request->category,
                    "short_description" => $request->short_description,
                    "price" => $request->price,
                    "start" => $request->start,
                    "finish" => $request->finish,
                    "min_person" => $request->min,
                    "max_person" => $request->max,
                    "toplam_gun" => $request->toplam_gun,
                    "toplam_saat" => $request->toplam_saat,

                ]);
            }
            if ($request->file('image') != null) {
                $image = $request->file('image');
                $image_name = hexdec(uniqid()) . "." . $image->getClientOriginalExtension();
                $save_url = "/images/uploads/course_images/" . $image_name;
                Image::make($image)->resize(710,488)->save('assets/images/uploads/course_images/' . $image_name);

                $create = Course::create([
                    "title" => $request->title,
                    "long_description" => $request->long_description,
                    "teacher_id" => $request->teacher,
                    "category_id" => $request->category,
                    "short_description" => $request->short_description,
                    "price" => $request->price,
                    "image" => $save_url,
                    "start" => $request->start,
                    "finish" => $request->finish,
                    "min_person" => $request->min,
                    "max_person" => $request->max,
                    "toplam_gun" => $request->toplam_gun,
                    "toplam_saat" => $request->toplam_saat,
                ]);
            }

            if ($create) {
                $son = Course::latest()->first();


                $count = count($request->content_title);

                for ($i = 0; $i < $count; $i++) {


                    
                    CourseContent::create([
                        "title" => $request->content_title[$i],
                        "description" => $request->content_description[$i],
                        "course_id" => $son->id
                    ]);
                }
            }
            Alert::success('Başarılı','Kurs ekleme işlemi başarılı');
            return redirect()->route('panel.course.list');
            
        }
    }

    public function list()
    {
        $data = Course::get();
        return view('backend.course.list',compact('data'));
    }

    public function aktiflik($id){
        $data = Course::find($id);
        $data->update([
            'aktiflik' => !$data->aktiflik
        ]);
        Alert::success('Başarılı','Aktiflik değiştirildi');
        return back();
    }

     public function edit($id){
        $data = Course::where('id',$id)->get();
        return view('backend.course.edit',compact('data'));
     }
}
