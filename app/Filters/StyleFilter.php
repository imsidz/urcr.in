<?php

// StyleFilter.php

namespace App\Filters;

class StyleFilter
{
    public function filter($builder, $value)
    {
        return $builder->whereHas('style', function ($query) use ($value) {
            $query->where('name', 'like', $value);
        });
    }
}
