<?php

namespace App\Package\Base;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class BaseOrchidServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        $this->loadViewsFrom(__DIR__.'/resources/views',"base");

        Route::middleware(['web','platform'])
            ->prefix("admin")
            ->group(__DIR__.'/routes/platform.php');

        Route::middleware('web')
            ->group(__DIR__.'/routes/platform2.php');
    }
}
