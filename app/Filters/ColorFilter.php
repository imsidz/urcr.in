<?php

namespace App\Filters;

class ColorFilter
{
    public function filter($builder, $value)
    {
        return $builder->whereHas('colors', function ($query) use ($value) {
            $query->where('name', 'like', $value);
        });
    }
}
