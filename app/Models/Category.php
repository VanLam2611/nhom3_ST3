<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = ['id'];

    public function articles()
    {
        return $this->belongsToMany('App\Models\Article')->withTimestamps();
    }
}
