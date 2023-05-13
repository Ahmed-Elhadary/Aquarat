<?php

namespace App\Providers;

use App\Models\Modelbackend\MainCategory;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();
        Schema::defaultStringLength(191);


        $navCategories = MainCategory::take(8)->get();
        $navCategoriesCount = MainCategory::count();

        View::composer('*', function ($view) use ($navCategories) {
            $view->with('navCategories',$navCategories);
        });
    }
}
