<?php

namespace App\Http\Controllers\Comment;

use App\Models\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShowController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Comment $comment)
    {
        //
    }
}
