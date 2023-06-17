<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;

class Ogrenci extends Authenticatable
{
    use HasFactory, HasApiTokens;
    protected $guarded = [];

    public function kurs_sayac(){
        return OgrenciKurs::where('ogr_id',$this->id)->count();
    }
}
