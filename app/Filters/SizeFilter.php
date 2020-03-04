<?php

// SizeFilter.php

namespace App\Filters;

class SizeFilter
{
    public function filter($builder, $value)
    {
        return $builder->whereHas('sizes', function ($query) use ($value) {
            $query->where('name', 'like', $value);
        });
    }
}
