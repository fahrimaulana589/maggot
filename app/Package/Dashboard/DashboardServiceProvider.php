<?php

namespace App\Package\Dashboard;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class DashboardServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        Route::middleware(['web','platform'])
            ->prefix("admin")
            ->group(__DIR__.'/routes/platform.php');
    }
}
