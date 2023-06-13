<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\BlogComment;
use RealRashid\SweetAlert\Facades\Alert;
use Intervention\Image\Facades\Image;




class BlogController extends Controller
{
    public function add(){
		return view('backend.blog.add');
	}
	public function store(Request $request){
		
		if($request->file('photo')){
			$image = $request->file('photo');
            $image_name = hexdec(uniqid()).".".$image->getClientOriginalExtension();
			$save_url = "/images/uploads/blog_images/".$image_name;
			Image::make($image)->resize(450,267)->save('assets/images/uploads/blog_images/'.$image_name);
			Blog::create([
				"title" => $request->title,
				"kapak" => $save_url,
				"short_description" => $request->short_description,
				"long_description" => $request->long_description
				]);
		}
		else{
			Blog::create([
				"title" => $request->title,
				"short_description" => $request->short_description,
				"long_description" => $request->long_description
				]);
		}
		
		Alert::success('Başarılı','Blog başarıyla eklendi.');
		return redirect()->route('panel.blog.list');
	}
	
	
	public function list(){
		$data = Blog::latest()->get();
		return view('backend.blog.list',compact('data'));
	}
	
	public function yorumlar($id){
		$data = BlogComment::where('blog_id',$id)->get();
		return view('backend.blog.yorumlar',compact('data'));
	}
	
	public function yorum_sil($id){
		BlogComment::where('id',$id)->delete();
		Alert::success('Başarılı','Yorum başarıyla silindi.');
		return back();
	}
	
	public function delete($id){
		BlogComment::where('blog_id',$id)->delete();
		Blog::where('id',$id)->delete();
		
		Alert::success('Başarılı','Silme işlemi başarılı.');
		return back();
	}
		
	
	
}
