<?php

namespace App\Http\Filters;

use Illuminate\Database\Eloquent\Builder;

class CategoryFilter extends AbstractFilter
{
    protected array $keys = [
        'title'
    ];

    protected function title(Builder $builder, $value): void
    {
        $builder->where('title', 'ilike', "%$value%");
    }
}
