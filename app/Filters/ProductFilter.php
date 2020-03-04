<?php

// ProductFilter.php

namespace App\Filters;

use App\Filters\AbstractFilter;
use Illuminate\Database\Eloquent\Builder;

class ProductFilter extends AbstractFilter
{
    protected $filters = [
        'style' => StyleFilter::class,
        'size' => SizeFilter::class,
        'color' => ColorFilter::class,
        'material' => MaterialFilter::class
    ];
}
