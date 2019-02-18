<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TheLoai extends Model
{
    protected $table="theloai";
    protected $fillable=['id','ten','tenkhongdau'];
    public $timestamps=false;

    public function loaitin(){
    	return $this->hasMany('App\LoaiTin','idtheloai','id');
    }
    public function tintuc()
    {
    	return $this->hasManyThrough('App\TinTuc','App\LoaiTin','idtheloai','idloaitin','id');
    }
}
