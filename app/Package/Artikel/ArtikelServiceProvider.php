<?php

namespace App\Package\Artikel;

use App\Package\Artikel\database\repository\ArtikelRepository;
use App\Package\Artikel\service\ArtikelService;
use App\Package\Page\database\repository\PageRepository;
use App\Package\Page\service\PageService;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class ArtikelServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(ArtikelRepository::class,function (){
            return new ArtikelRepository();
        });

        $this->app->singleton(ArtikelService::class,function ($app){
            $artikelRepository = $app->make(ArtikelRepository::class);
            return new ArtikelService($artikelRepository);
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
