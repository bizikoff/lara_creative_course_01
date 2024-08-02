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
        $post = Post::factory()->create();
        Log::channel('post')->info('Post created', [$post]);
        $this->info('Command was executed');
    }
}
