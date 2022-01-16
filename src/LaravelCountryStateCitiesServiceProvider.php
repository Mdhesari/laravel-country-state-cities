<?php

namespace Mdhesari\LaravelCountryStateCities;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class LaravelCountryStateCitiesServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        /*
         * Optional methods to load your package assets
         */
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'laravel-country-state-cities');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'laravel-country-state-cities');
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/config.php' => config_path('laravel-country-state-cities.php'),
            ], 'config');

            // Publishing the views.
            /*$this->publishes([
                __DIR__.'/../resources/views' => resource_path('views/vendor/laravel-country-state-cities'),
            ], 'views');*/

            // Publishing assets.
//            $this->publishes([
//                __DIR__.'/../database/dump' => database_path('dump/'),
//            ], 'db-dump');

            // Publishing the translation files.
            /*$this->publishes([
                __DIR__.'/../resources/lang' => resource_path('lang/vendor/laravel-country-state-cities'),
            ], 'lang');*/

            // Registering package commands.
            // $this->commands([]);
        }

        $this->handleRoutes();
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__ . '/../config/config.php', 'laravel-country-state-cities');

        // Register the main class to use with the facade
        $this->app->singleton('laravel-country-state-cities', function () {
            return new LaravelCountryStateCities;
        });
    }

    /*--------------------------------------------------------------------------
 | Register Routes
 |--------------------------------------------------------------------------*/

    private function handleRoutes()
    {
        $route = Route::prefix('api')
            ->middleware('api');

        $route->group(__DIR__ . '/../routes/api.php');

    }
}
