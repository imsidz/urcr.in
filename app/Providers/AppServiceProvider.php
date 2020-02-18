<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        view()->composer('layouts.app.topmenu', function ($view) {
            $view->with('categories', Category::paginate(7));
        });

        view()->composer('layouts.app.topmenu', function ($view) {
            $view->with('subcategories', SubCategory::inRandomOrder()->paginate(7));
        });

        view()->composer('layouts.app.topmenu', function ($view) {
            $view->with('products', Product::inRandomOrder()->paginate(7));
        });

        if ($this->app->environment() !== 'production') {
            $this->app->register(\Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider::class);
        }
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
