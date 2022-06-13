<?php

namespace App\Package\Profile;

use App\Package\Profile\database\repository\ProfileRepository;
use App\Package\Profile\service\ProfileService;
use App\Package\Slide\database\repository\SlideRepository;
use App\Package\Slide\service\SlideService;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class ProfileServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(ProfileRepository::class,function (){

            return new ProfileRepository();
        });

        $this->app->singleton(ProfileService::class,function ($app){

            $slideRepository = $app->make(ProfileRepository::class);
            return new ProfileService($slideRepository);
        });
    }

    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        $this->loadViewsFrom(__DIR__.'/resources/views',"page");

        Route::middleware(['web','platform'])
            ->prefix("admin")
            ->group(__DIR__.'/routes/platform.php');
    }
}
