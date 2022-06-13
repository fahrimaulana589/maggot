<?php

namespace App\Package\Tutorial;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class TutorialServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        $this->loadViewsFrom(__DIR__.'/resources/views',"page");

        Route::middleware(['web','platform'])
            ->prefix("admin")
            ->group(__DIR__.'/routes/platform.php');

        Route::middleware('web')
            ->group(__DIR__.'/routes/platform2.php');
    }
}
