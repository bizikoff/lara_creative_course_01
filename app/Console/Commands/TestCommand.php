<?php

namespace App\Console\Commands;

use App\Models\Post;
use App\Models\Profile;
use Illuminate\Console\Command;

class TestCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'testcom';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Test some functions';

    /**
     * Execute the console command.
     */
    public function handle() : void
    {
        
    }
}
