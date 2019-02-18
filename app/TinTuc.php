<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TinTuc extends Model
{
    protected $table="tintuc";
    protected $fillable=['id','tieude','tieudekhongdau','tomtat','noidung','hinh','noibat','luotxem','idloaitin'];
   // public $timestamps=true;
    public function loaitin()
    {
    	return $this->belongsTo('App\LoaiTin','idloaitin','id');
    }
    public function comment()
    {
    	return $this->hasMany('App\Comment','idtintuc','id');
    }
}
