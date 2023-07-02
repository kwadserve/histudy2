<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogComment;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function list(){
        $son = Blog::latest()->first();
        $uc = Blog::inRandomOrder()->take(3)->get();
        $hepsi = Blog::inRandomOrder()->get();
        return view('frontend.blog.list',compact('son','uc','hepsi'));
    }

    public function blog_detail($id){
        $yorumlar = BlogComment::where('blog_id',$id)->latest()->get();
        $data = Blog::find($id);
        $uc = Blog::latest()->take(3)->get();
        $sondan_basa = Blog::latest()->get();
        return view('frontend.blog.detail',compact('data','uc','sondan_basa','yorumlar'));
    }
}
