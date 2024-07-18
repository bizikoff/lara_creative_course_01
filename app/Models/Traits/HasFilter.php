<?php

namespace App\Models\Traits;

use Illuminate\Database\Eloquent\Builder;

trait HasFilter
{
    public function scopeFilter(Builder $builder, array $data): Builder
    {
        $ClassName = 'App\\Http\\Filters\\' . class_basename($this) . 'Filter';
        return (new $ClassName())->apply($builder, $data);
    }
}
