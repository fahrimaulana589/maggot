<?php

namespace App\Package\Menu;

use App\Package\Menu\database\repository\MenuRepository;
use App\Package\Menu\service\MenuService;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class MenuServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(MenuRepository::class,function (){
            return new MenuRepository();
        });

        $this->app->singleton(MenuService::class,function ($app){
            $menuRepository = $app->make(MenuRepository::class);
            return new MenuService($menuRepository);
        });
    }

    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');

        Route::middleware(['web','platform'])
            ->prefix("admin")
            ->group(__DIR__.'/routes/platform.php');
    }
}
