<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
	protected $guarded = [];
	
	public function Sayac(){
		return BlogComment::where('blog_id',$this->id)->count();
	}
	
	public function blogSayac(){
		return Blog::where('id',$this->id)->count();	
	}
}
