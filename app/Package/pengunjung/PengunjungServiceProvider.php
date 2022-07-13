<?php

namespace App\Package\pengunjung;

use App\Package\base\AdminBaseServiceProvider;
use App\Package\pengunjung\database\repository\PengunjungRepository;
use App\Package\pengunjung\service\PengunjungService;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class PengunjungServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(PengunjungRepository::class,function (){
            return new PengunjungRepository();
        });

        $this->app->singleton(PengunjungService::class,function ($app){
            $pageRepository = $app->make(PengunjungRepository::class);
            return new PengunjungService($pageRepository);
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
            ->group(__DIR__.'/routes/web.php');
    }
}
