<?php

namespace App\Exceptions;

use App\Models\Post;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;
use Throwable;

class PostException extends Exception
{
    private Post $post;

    /**
     * @param string $message - сообщение, которое передается при вызове Exception
     * @param int $code - код ошибки
     * @param Post|null $post - пост который мы передаем для проверки
     * @param Throwable|null $previous
     */
    public function __construct(string $message = "", int $code = 0, Post $post = null, ?Throwable
    $previous = null)
    {
        $this->post = $post;
        parent::__construct($message, $code, $previous);
    }

    /**
     * Report the exception.
     */
    public function report(): void
    {
        Log::channel('post')->info('Post already exists:', [$this->post]);
    }

    /**
     * Render the exception as an HTTP response.
     */
    public function render(Request $request): Response
    {
        return response([
            'message' => $this->message
        ], $this->code);
    }

    /**
     * @param Post $post
     * @return void
     * @throws PostException
     */
    public static function checkIfExists(Post $post): void
    {
        if(!$post->wasRecentlyCreated) {
            throw new PostException('Post already exists.', 200, $post);
        }
    }
}
