<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Expr\FuncCall;

class Article extends Model
{
    protected $fillable = [
        'user_id', 'title', 'content',
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    /**
     * Get the tags for the article
     */
    public function tags()
    {
        return $this->belongsToMany('App\Models\Tag');
    }
    /**
     * Get all of the profiles' comments.
     */
    public function comments()
    {
        return $this->morphMany('App\Comment', 'commentable');
    }
}
