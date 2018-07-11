<?php

namespace App\Providers;

use App\Admin;
use App\Settings;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $siteTitle = Settings::where('key', 'site_name')->first()->value;
        view()->composer('layouts.app', function($view) use ($siteTitle)
        {
            $view->with(['siteTitle' => $siteTitle]);
        });
        view()->composer('layouts.admin', function($view) use ($siteTitle)
        {
            $view->with(['siteTitle' => $siteTitle]);
        });

        $avatar = Admin::find(1)->avatar;
        view()->composer('layouts.admin', function($view) use ($avatar)
        {
            $view->with(['avatar' => $avatar]);
        });

        Schema::defaultStringLength(191);
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
