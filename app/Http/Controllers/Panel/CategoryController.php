<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class CategoryController extends Controller
{
    public function add(){
        Alert::success('Başarılı','Ekleme sayfasına ulaşıldı');
        return view('backend.category.add');

    }

    public function list(){
        return view('backend.category.list');

    }
}
