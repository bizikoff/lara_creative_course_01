<?php

namespace App\Models;

use App\Models\Post;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Profile extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function comments()
    {
        return $this->hasManyThrough(Comment::class, Post::class);
    }

    public function likedComments()
    {
        return $this->morphedByMany(Comment::class, 'likeable');
    }

    public function likedPosts()
    {
        return $this->morphedByMany(Post::class, 'likeable');
    }
}
