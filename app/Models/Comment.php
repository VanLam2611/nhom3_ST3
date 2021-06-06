<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['content'];


    public function article()
    {
        return $this->morphTo();
    }
}
