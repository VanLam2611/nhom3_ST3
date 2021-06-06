<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //
    protected $table = 'role';
    public $primaryKey = 'role_id';
    public $timestamps = false;

    public function roleUser(){
        return $this->belongsTo('App\User','role_id');
    }
}
