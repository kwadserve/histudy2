<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BlogComment;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class BlogCommentController extends Controller
{
    public function store(Request $request){
		$valid = $request->validate([
			"yorum" => "required",
			],[
			"yorum.required" => "Boş yorum yapılamaz!",
			]);
		if($valid){
			BlogComment::create([
				"blog_id" => $request->blog_id,
				"student_id" =>Auth::guard('ogrenci')->user()->id,
				"comment" => $request->yorum
				]);
			Alert::success('Başarılı','Yorum yapma başarılı.');
			return back();
		}
	}
}
