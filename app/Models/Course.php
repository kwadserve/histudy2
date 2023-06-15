<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Course extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function kategori(){
        return $this->hasOne(Category::class,'id','category_id');
    }

    public function ogretmen(){
        return $this->hasOne(Teacher::class,'id','teacher_id');
    }

    public function OgretmeninKurslari(){
        $data = Course::where('teacher_id',$this->ogretmen->id)->latest()->take(2)->get();
        return $data;
    }

    public function ogr_kurs(){
        $ogr_id = Auth::guard('ogrenci')->user()->id;
        $data = OgrenciKurs::where('kurs_id',$this->id)->where('ogr_id',$ogr_id)->get();
        return $data;
    }

    
    
}
