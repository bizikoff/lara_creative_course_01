<?php

namespace App\Http\Filters;

use Illuminate\Database\Eloquent\Builder;

class ProfileFilter extends AbstractFilter
{
    protected array $keys = [
        'login',
        'first_name',
        'last_name',
        'gender',
        'born_at_from',
        'born_at_to',
        'email'
    ];

    protected function login(Builder $builder, $value): void
    {
        $builder->where('login', 'ilike', "%$value%");
    }

    protected function firstName(Builder $builder, $value): void
    {
        $builder->where('first_name', 'ilike', "%$value%");
    }

    protected function lastName(Builder $builder, $value): void
    {
        $builder->where('last_name', 'ilike', "%$value%");
    }

    protected function gender(Builder $builder, $value): void
    {
        $builder->where('gender', '=', "%$value%");
    }

    protected function bornAtFrom(Builder $builder, $value): void
    {
        $builder->where('born_at', '>=', "%$value%");
    }

    protected function bornAtTo(Builder $builder, $value): void
    {
        $builder->where('born_at', '<=', "%$value%");
    }

    protected function email(Builder $builder, $value): void
    {
        $builder->whereRelation('user', 'email', 'ilike', "%$value%");
    }
}
