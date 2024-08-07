<?php

namespace App\Observers;

use App\Models\Post;
use Illuminate\Support\Facades\Log;

class PostObserver
{
    /**
     * Handle a logging for the event
     *
     * $logContent - сообщение которое передается в файл .log
     *   storage_path - вспомогательная функция Laravel, которая возвращает абсолютный путь к
     *   директории storage
     *   file_put_contents - встроенная функция PHP позволяющая записывать данные в файл
     *   ---------параметры file_put_contents----------
     *   1. $fileName - путь к файлу
     *   2. $logContent . PHP_EOL - данные для записи (PHP_EOL - перенос строки)
     *   3. FILE_APPEND - режим записи, означает что новые данные будут добавлены в конец
     *   существующего файла, а не перезаписывать его
     *
     * @param string $action - name of event, which we're logging
     * @param Post $post
     * @return void
     */
    private function eventLogging(string $action, Post $post): void
    {
//        logging in a common log file
        Log::channel('post')->info("Post was {$action}", ['post' => $post]);

//        logging in a personal log file
        if ($action === 'updated') {
            $changes = $post->getChanges();
            $original = $post->getOriginal();
            $logContent = "Post (ID:{$post->id}) has been updated: \n";

            foreach ($changes as $attribute => $newValue) {
                $oldValue = $original[$attribute];
                $logContent .= "{$attribute} was changed FROM: '{$oldValue}' TO: '{$newValue}' \n";
            }

            $fileName = storage_path("logs/post-updated.log");
        } else {
            $logContent = "Post has been {$action}: ID - {$post->id}, Title - {$post->title}";
            $fileName = storage_path("logs/post-{$action}.log");
        }
        file_put_contents($fileName, $logContent. PHP_EOL, FILE_APPEND);
    }

    /**
     * Handle the Post "created" event.
     */
    public function created(Post $post): void
    {
        $this->eventLogging('created', $post);
    }

    /**
     * Handle the Post "updated" event.
     */
    public function updated(Post $post): void
    {
        $this->eventLogging('updated', $post);
    }

    /**
     * Handle the Post "deleted" event.
     */
    public function deleted(Post $post): void
    {
        $this->eventLogging('deleted', $post);
    }

    /**
     * Handle the Post "restored" event.
     */
    public function restored(Post $post): void
    {
        $this->eventLogging('restored', $post);
    }

}
