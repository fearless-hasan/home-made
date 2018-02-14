<?php

namespace App\Providers;

use App\Category;
use App\Item;
use App\SubCategory;
use Illuminate\Support\ServiceProvider;

use View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
//        View::share('key', 'value');
        View::composer('admin.*', function ($view) {
            $view->with('providedCategories', Category::where('publication_status', 1)->get());
            $view->with('providedSubCategories', SubCategory::where('publication_status', 1)->get());
        });
        View::composer('front-end.*', function ($view) {
            $view->with('providedCategories', Category::where('publication_status', 1)->get());
            $view->with('providedSubCategories', SubCategory::where('publication_status', 1)->get());
            $view->with('providedItems', Item::where('publication_status', 1)->get());
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
