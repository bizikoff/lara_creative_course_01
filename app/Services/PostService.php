<?php

namespace App\Services;

use App\Exceptions\PostException;
use App\Models\Post;
use Illuminate\Support\Facades\Log;

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

    /**
     * @throws PostException
     */
    public static function createOrUpdatePost(array $data, int $id = null, Post $post = null): Post
    {
        if($id) {
            $method = 'updateOrCreate';
            PostException::checkOnChanges($data, $post);
            $post = $post->updateOrCreate(['title' => $post->title], $data);
        } else {
            $method = 'firstOrCreate';
            $post = Post::firstOrCreate(['title' => $data['title']], $data);
            PostException::checkIfExists($post);
        }
        Log::channel('post')->info("Command was executed with $method method");
        return $post;
    }
}
