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
        $profile = Profile::find(1);
        $post = Post::find(1);
        $comment = Comment::find(1);
        $category = Category::find(1);
        $tag = Tag::find(1);
        $role = Role::find(2);

        // dd($user->profiles);
        // dd($profile->user);
        // dd($profile->posts);
        // dd($post->comments);
        // dd($post->category);
        // dd($post->tags);
        // dd($comment->post);
        // dd($category->posts);
        // dd($tag->posts);
        // dd($role->profiles);


    }
}
