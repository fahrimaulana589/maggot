<?php

namespace App\Package\Page;

use App\Helper\Orchid\OrchidComponent;
use App\Package\Page\database\repository\PageRepository;
use App\Package\Page\service\PageService;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class PageServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(PageRepository::class,function (){
            return new PageRepository();
        });

        $this->app->singleton(PageService::class,function ($app){
            $pageRepository = $app->make(PageRepository::class);
            return new PageService($pageRepository);
        });

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
