<?php

namespace App\Console\Commands;

use App\Models\Tag;
use App\Models\Post;
use App\Models\User;
use App\Models\Comment;
use App\Models\Profile;
use App\Models\Category;
use App\Models\Role;
use Illuminate\Console\Command;

class GoCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'go';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Check relationship between tables';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $user = User::find(1);
        // dd($user->profiles);

        $profile = Profile::find(1);
        // dd($profile->user);
        // dd($profile->posts);
        // dd($profile->comments);
        // dd($profile->likedPosts->toArray());
        // $profile->likedPosts()->attach([2, 4, 6]);
        // dd($profile->likedComments->toArray());
        // $profile->likedComments()->attach([1, 3, 5]);

        $post = Post::find(2);
        // dd($post->comments);
        // dd($post->category);
        // dd($post->tags);
        // dd($post->likedByProfiles->toArray());

        $comment = Comment::find(1);
        // dd($comment->post);
        // dd($comment->profile);
        // dd($comment->category);
        // dd($comment->likedByProfiles->toArray());

        $category = Category::find(1);
        // dd($category->posts);
        // dd($category->comments);

        $tag = Tag::find(1);
        // dd($tag->posts);

        $role = Role::find(2);
        // dd($role->profiles);

    }
}
