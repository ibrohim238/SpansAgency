<?php

namespace App\Filters;

use Illuminate\Database\Eloquent\Builder;

class MonthCreatedAtFilter implements \Spatie\QueryBuilder\Filters\Filter
{

    /**
     * @inheritDoc
     */
    public function __invoke(Builder $query, $value, string $property)
    {
        $query->whereMonth('created_at', $value);
    }
}
