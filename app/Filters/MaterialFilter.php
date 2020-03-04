<?php

// SizeFilter.php

namespace App\Filters;

class MaterialFilter
{
    public function filter($builder, $value)
    {
        return $builder->whereHas('materials', function ($query) use ($value) {
            $query->where('name', 'like', $value);
        });
    }
}
