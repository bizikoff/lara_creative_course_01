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
use Illuminate\Support\Facades\Log;

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
////        creating
//        $post = Post::factory()->create();

////        updating
//        $post = Post::find(1);
//        $post->update([
//            'title' => 'updated title, logged'
//        ]);

//////        deleting
//        $post = Post::find(1);
//        $post->delete();

//        restore
//        $post = Post::withTrashed()->find(1);
//        $post->restore();

        $this->info('Command was executed');
    }
}
