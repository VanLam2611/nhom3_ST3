<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $table = 'comments';
    protected $primaryKey = 'id';
    public $timestamps = true;
    // protected $guarded = ['id'];
    protected $fillable = ['content'];

    public function getArticle()
    {
        return $this->hasOne('App\Models\Article', 'article_id' , 'id');
    }
    public function getUserForComment()
    {
        return $this->hasOne('App\Models\User', 'user_id' , 'id');
    }
}
