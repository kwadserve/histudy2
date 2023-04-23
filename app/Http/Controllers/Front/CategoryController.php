<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Course;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function list(){
        $data = Category::get();
        return view('frontend.category.list',compact('data'));
    }

    public function detail($id){
        $data = Course::where('category_id',$id)->get();
        return view('frontend.category.detail',compact('data'));
    }
}
