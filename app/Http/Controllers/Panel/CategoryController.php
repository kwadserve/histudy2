<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Intervention\Image\Facades\Image;


class CategoryController extends Controller
{
    public function add(){
        return view('backend.category.add');

    }

    public function store(Request $request){
        $valid = $request->validate([
            "name" => "required",
            "description" => "required",
        ],[
            "name.required" => "Kategori ismi boş bırakılamaz.",
            "description.required" => "Kategori açıklaması boş bırakılamaz.",
        ]);

        if($valid){
            if($request->file('image') != null){
                $image = $request->file('image');
                $image_name = hexdec(uniqid()).".".$image->getClientOriginalExtension();
                $save_url = "/images/uploads/category_images/".$image_name;
                Image::make($image)->resize(550,300)->save('assets/images/uploads/category_images/'.$image_name);
                $create = Category::create([
                    "name" => $request->name,
                    "description" => $request->description,
                    "image" => $save_url
                ]);
            }
            if($request->file('image') == null){
                $create = Category::create([
                    "name" => $request->name,
                    "description" => $request->description,
                ]);
            }
            if($create){
                Alert::success('Başarılı','Kategori ekleme işlemi başarılı.');
                return redirect()->route('panel.category.list');
            }
        }
    }

    public function list(){
        $data = Category::get();
        return view('backend.category.list',compact('data'));

    }

    public function edit($id){
        $data = Category::where('id',$id)->get();
        return view('backend.category.edit',compact('data'));
    }

    public function upgrade(Request $request){
        $request->validate([
            "name" => "required",
            "description" => "required",
        ],[
            "name.required" => "Kategori ismi boş bırakılamaz.",
            "description.required" => "Kategori açıklaması boş bırakılamaz.",
        ]);

        if($request->file('image') != null){
            $image = $request->file('image');
            $image_name = hexdec(uniqid()).".".$image->getClientOriginalExtension();
            $save_url = "/images/uploads/category_images/".$image_name;
            Image::make($image)->resize(550,300)->save('assets/images/uploads/category_images/'.$image_name);
            $create = Category::where('id',$request->cat_id)->update([
                "name" => $request->name,
                "description" => $request->description,
                "image" => $save_url
            ]);
        }
        if($request->file('image') == null){
            $create = Category::where('id',$request->cat_id)->update([
                "name" => $request->name,
                "description" => $request->description,
            ]);
        }
        if($create){
            Alert::success('Başarılı','Kategori ekleme işlemi başarılı.');
            return redirect()->route('panel.category.list');
        }
    }

    public function destroy($id){
        Category::where('id',$id)->delete();
        Alert::success('Başarılı','Silme işlemi başarılı.');
        return back();
    }
}
