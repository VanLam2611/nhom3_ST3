<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = [
        'tag'  
    ];

    public function article() {
        return $this->belongsToMany('App\Models\Article');
    }
}
