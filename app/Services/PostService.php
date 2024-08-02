<?php

namespace App\Services;

use App\Models\Post;

class PostService
{
    /**
     * @return Post
     */
    public static function firstOrCreate(): Post
    {
        return Post::firstOrCreate([
            'title' => 'First Or Created post 01'
        ], [
            'content' => 'This is first or created post',
            'category_id' => 1,
            'profile_id' => 1
        ]);
    }
}
