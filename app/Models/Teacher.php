<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function course_count(){
        $data = Course::where('teacher_id',$this->id)->count();
        return $data;
    }

    public function Kategoriler(){
        // get = [0 => { name : 'ali', yas: 12}]
        // pluck = [1, 345, 5677]
        // $data = [1, 23, 667, 2]
        $data = Course::where('teacher_id',$this->id)->groupBy('category_id')->pluck('category_id')->all();
        $data2 = Category::whereIn('id',$data)->get();
        return $data2;
    }
}
