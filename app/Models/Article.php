<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'user_id', 'title', 'content', 'slug', 'status',
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
    /**
     * Get the tags for the article
     */
    public function categories() {
        return $this->belongsToMany('App\Models\Category')->withTimestamps();
    }
    /**
     * Get the tags for the article
     */
    public function tags()
    {
        return $this->belongsToMany('App\Models\Tag')->withTimestamps();
    }
    /**
     * Get all of the profiles' comments.
     */
    public function comments()
    {
        return $this->morphMany('App\Models\Comment', 'article');
    }
}
