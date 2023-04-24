<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $guarded = [];


    public function course_count(){
        $data = Course::where('category_id',$this->id)->count();
        return $data;
    }

    public function Course(){
        $data = Course::where('category_id',$this->id)->get();
        return $data;
    }
}
