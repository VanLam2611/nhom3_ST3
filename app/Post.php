<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $table = 'post';
    public $primaryKey = 'post_id';
    public $timestamps = false;

    public function posttype(){
        return $this->hasOne('App\Posttype','type_id','type_id');
    }
    public function getUser(){
        return $this->hasOne('App\User','user_id','post_id');
    }
}
