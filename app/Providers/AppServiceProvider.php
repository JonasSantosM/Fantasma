<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
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
        //
        Schema::defaultStringLength(191);   
        View::share('logged', null);
    }

    public static $public = null;

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
