<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Models\OneriIcerik;
use Illuminate\Http\Request;

class OneriController extends Controller
{
    public function list(){
        $data = OneriIcerik::latest()->get();
        return view('backend.oneri.list',compact('data'));
    }
}
