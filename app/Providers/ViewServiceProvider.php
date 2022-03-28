<?php

namespace App\Providers;

use App\Models\About;
use App\Models\SiteSetting;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('*', function ($view) {
            $siteSetting = SiteSetting::firstOrFail();
            $about = About::firstOrFail();
            $view->with('siteSetting', $siteSetting);
            $view->with('about', $about);
        });
    }
}
