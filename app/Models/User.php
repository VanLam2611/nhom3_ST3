<?php
namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasRoles, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    /**
     * One-One relational: User<-Profile
     */
    public function profile()
    {
        return $this->hasOne('App\Models\Profile');
    }

    public function article()
    {
        return $this->hasOne('App\Models\Article');
    }

    public function articles()
    {
        return $this->hasMany('App\Models\Article');
    }

    public function comment()
    {
        return $this->hasOne('App\Models\Comment');
    }
    public function comments()
    {
        return $this->hasMany('App\Models\Comment');
    }
}
