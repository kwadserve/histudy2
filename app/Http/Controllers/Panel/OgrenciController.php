<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\OgrenciKurs;
use App\Models\Ogrenci;
use App\Models\Course;
use RealRashid\SweetAlert\Facades\Alert;

class OgrenciController extends Controller
{
    public function list(){
	$data = Ogrenci::latest()->get();
	return view('backend.ogrenci_kurs.ogrenciler',compact('data'));
	}
	
	public function ogrenci_kurslari($id){
		$data2 = OgrenciKurs::where('ogr_id',$id)->groupBy('kurs_id')->pluck('kurs_id')->all();
		$data = Course::whereIn('id',$data2)->get();
		return view('backend.ogrenci_kurs.ogrenci_seminerler',compact('data'));
	}

	public function ogrenci_seminer_sil($id){
		OgrenciKurs::where('id',$id)->delete();
		Alert::success('Başarılı');
		return back();
	}

	public function sil($id){
		Ogrenci::find($id)->delete();
		Alert::success('Silme Başarılı');
		return back();
	}
}
