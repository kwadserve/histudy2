<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OneriIcerik extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function kisi(){
        return $this->hasOne(OneriKisi::class,'id','oneri_kisi_id');
    }
}
