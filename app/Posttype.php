<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posttype extends Model
{
    //
    protected $table = 'posttype';
    public $primaryKey = 'type_id';
    public $timestamps = false;

    public function post(){
        return $this->belongsTo('App\Post','type_id');
    }
}
