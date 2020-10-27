<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    public $fillable = ['username', 'email', 'post_id', 'content'];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    public function getGravatarAttribute()
    {
        return "https://www.gravatar.com/avatar/" . md5($this->email) . '?d=mm&s=100';
    }
}
