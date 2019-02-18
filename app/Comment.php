<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table="comment";
    protected $fillable=['iduser','idtintuc','noidung'];
    public $timestamps=true;
    public function user()
    {
    	return $this->belongsTo('App\User');
    }
    public function tintuc()
    {
    	return $this->belongsTo('App\TinTuc');
    }
}
