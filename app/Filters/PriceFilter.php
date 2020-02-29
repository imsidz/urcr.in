<?php

// PriceFilter.php

namespace App\Filters;

class PriceFilter
{
    public function filter($builder, $value)
    {
        return $builder->whereHas('sizes', function ($query) use ($value) {
            $query->where('name', 'like', $value);
        });
    }
}
