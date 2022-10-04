<?php

namespace GeniusDivision\HtmlPurifier;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(LaravelHtmlPurifier::class, function () {
            return new LaravelHtmlPurifier();
        });
    }
}
