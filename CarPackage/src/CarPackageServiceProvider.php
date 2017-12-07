<?php

namespace JackXhy\CarPackage;

use Illuminate\Support\ServiceProvider;

class CarPackageServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //

        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');

        $this->loadViewsFrom(__DIR__ . '/resources/views', 'CarPackage');
    }


    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->bind('car_package', function($app){
            return new CarPackage();
        });

    }

}
