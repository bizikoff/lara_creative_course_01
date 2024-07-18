<?php

namespace App\Http\Filters;

use Illuminate\Database\Eloquent\Builder;

class TagFilter extends AbstractFilter
{
    protected array $keys = [
        'title',
        'post_title'
    ];

    protected function title(Builder $builder, $value): void
    {
        $builder->where('title', 'ilike', "%$value%");
    }

    protected function postTitle(Builder $builder, $value): void
    {
        $builder->whereRelation('posts', 'title', 'ilike', "%$value%");
    }
}
