<?php

namespace App\Http\Filters;


use Illuminate\Database\Eloquent\Builder;

class CommentFilter extends AbstractFilter
{
    protected array $keys = [
        'content',
        'profile_login',
        'post_title'
    ];

    protected function content(Builder $builder, $value): void
    {
        $builder->where('content', 'ilike', "%$value%");
    }

    protected function profileLogin(Builder $builder, $value): void
    {
        $builder->whereRelation('profile', 'login', 'ilike', "%$value%");
    }

    protected function postTitle(Builder $builder, $value): void
    {
        $builder->whereRelation('post', 'title', 'ilike', "%$value%");
    }
}
