<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
        $data = Course::where('teacher_id',$this->id)->latest()->take(2)->get();
        return $data;
    }
    
}
