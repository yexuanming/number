<?php

namespace Fanly\Num2nmb;

use Illuminate\Support\ServiceProvider;

class Num2nmbServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        include __DIR__.'/routes.php';
        $this->app->make('Fanly\Num2nmb\Num2nmbController');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/views', 'num2nmb');
        $this->publishes([
            __DIR__.'/views' => base_path('resources/views/num2nmb'),
        ]);
    }
}
