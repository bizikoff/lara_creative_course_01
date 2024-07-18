<?php

namespace App\Http\Filters;

use Illuminate\Database\Eloquent\Builder;

class PostFilter extends AbstractFilter
{

    protected array $keys = [
        'title',
        'content',
        'published_at_from',
        'published_at_to',
        'category_title',
    ];

    protected function title(Builder $builder, $value)
    {
        $builder->where('title', 'ilike', "%$value%");
    }

    protected function content(Builder $builder, $value)
    {
        $builder->where('content', 'ilike', "%$value%");
    }

    protected function publishedAtFrom(Builder $builder, $value)
    {
        $builder->where('published_at', '>=', "%$value%");
    }

    protected function publishedAtTo(Builder $builder, $value)
    {
        $builder->where('published_at', '<=', "%$value%");
    }

    protected function categoryTitle(Builder $builder, $value)
    {
        $builder->whereRelation('categories', 'title', 'ilike', "%$value%");
    }
}
