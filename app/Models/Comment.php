<?php

namespace App\Models;

use App\Models\Post;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comment extends Model
{
    use HasFactory;

    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    public function profile() {
        return $this->post->profile();
    }

    public function category()
    {
        return $this->post->category();
    }

    public function likedByProfiles()
    {
        return $this->morphToMany(Profile::class, 'likeable');
    }
}
