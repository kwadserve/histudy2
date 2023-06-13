<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Ogrenci;

class BlogComment extends Model
{
    use HasFactory;
	protected $guarded = [];
	
	public function kisi(){
		return $this->hasOne(Ogrenci::class,'id','student_id');
	}
	
	
}
