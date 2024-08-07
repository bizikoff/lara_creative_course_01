<?php

namespace App\Http\Resources\Comment;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CommentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'comment_to' => $this->post->title,
            'content' => $this->content,
            'author' => $this->profile->login,
            'created_at' => $this->created_at->diffForHumans(),
        ];
    }
}
