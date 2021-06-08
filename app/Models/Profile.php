<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'user_id', 'facebookUsername', 'address', 'bio',
        ];
    
    /**
     * One-One relational: Profile->User
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
    /**
     * Get all of the profiles' comments.
     */
    public function comments()
    {
        return $this->morphMany('App\Models\Comment', 'commentable');
    }
}
