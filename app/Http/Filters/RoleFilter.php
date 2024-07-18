<?php

namespace App\Http\Filters;

use Illuminate\Database\Eloquent\Builder;

class RoleFilter extends AbstractFilter
{
    protected array $keys = [
        'title',
        'username'
    ];

    protected function title(Builder $builder, $value): void
    {
        $builder->where('title', 'ilike', "%$value%");
    }

    protected function username(Builder $builder, $value): void
    {
        $builder->whereRelation('users', 'name', 'ilike', "%$value%");
    }
}
