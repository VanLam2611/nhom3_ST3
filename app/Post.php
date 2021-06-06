<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $table = 'post';
    public $primaryKey = 'post_id';
    public $timestamps = false;

    public function getPostType(){
        return $this->hasOne('App\Posttype','type_id','type_id');
    }
    public function getUser(){
        return $this->hasOne('App\User','user_id','user_id');
    }
    public function getCommant(){
        return $this->belongsTo('App\Commant','post_id');
    }
}
