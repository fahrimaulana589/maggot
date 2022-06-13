<?php

namespace App\package\User;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class UserServiceProvider extends ServiceProvider
{
    public function register()
    {

    }

    public function boot()
    {
        Route::middleware(['web','platform'])
            ->prefix("admin")
            ->group(__DIR__.'/routes/platform.php');

    }
}
