<?php

namespace LS\Chargify;

use Illuminate\Support\ServiceProvider;

class ChargifyServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        // Route
        include __DIR__.'/Http/routes.php';

        // Language
        $this->loadTranslationsFrom( __DIR__.'/resources/lang', 'chargify');

        // TODO
        /*$this->publishes([
            __DIR__.'/config/chargify.php' => config_path('config.php'),
        ], 'config');*/
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        // Config
        $this->mergeConfigFrom( __DIR__.'/config/chargify.php', 'chargify');

        /*$this->app['chargify'] = $this->app->share(function($app) {
            return new Chargify;
        });*/
    }
}
