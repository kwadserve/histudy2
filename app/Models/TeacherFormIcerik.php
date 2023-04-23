<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeacherFormIcerik extends Model
{
    use HasFactory;
    protected $guarded = [];


    public function kisi(){
        return $this->hasOne(TeacherForm::class,'id','teacher_form_id');
    }
}
