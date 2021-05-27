<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commant extends Model
{
    //
    protected $table = 'commant';
    public $primaryKey = 'cmt_id';
    public $timestamps = false;

    public function getCommantByPost(){
        return $this->hasOne('App\Posttype','post_id','post_id');
    }
    
}
