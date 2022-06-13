<?php

namespace App\Package\Slide;

use App\Package\Slide\database\repository\SlideRepository;
use App\Package\Slide\service\SlideService;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class SlideServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(SlideRepository::class,function (){

            return new SlideRepository();
        });

        $this->app->singleton(SlideService::class,function ($app){

            $slideRepository = $app->make(SlideRepository::class);
            return new SlideService($slideRepository);
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
