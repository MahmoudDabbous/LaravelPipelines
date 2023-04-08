<?php

namespace App\Filters;

use Closure;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class ByName
{
    function __construct(protected Request $request)
    {
    }

    public function handle(Builder $builder, Closure $next)
    {
        return $next($builder)->when(
            $this->request->has('name'),
            fn ($query) => $query->where('name', 'REGEXP', $this->request->name)
        );
    }
}
