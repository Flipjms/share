<?php

namespace Clumsy\Share;

use Illuminate\Support\ServiceProvider;

class ShareServiceProvider extends ServiceProvider
{

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {

        $this->mergeConfigFrom(__DIR__.'/config/config.php', 'clumsy/share');

        $this->publishes([
            __DIR__.'/config/config.php'  => config_path('vendor/clumsy/share/config.php'),
        ], 'config');

        $this->loadViewsFrom(__DIR__.'/views', 'clumsy/share');


        // $this->app['clumsy.share'] = $this->app->share(function ($app) {
        //                                 return new Share;
        // });

    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('clumsy.share', function ($app) {
            return new Share;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array('clumsy.share');
    }
}
