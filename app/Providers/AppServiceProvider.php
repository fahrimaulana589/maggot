<?php

namespace App\Providers;

use App\Helper\Orchid\OrchidComponent;
use App\Helper\Orchid\OrchidRow;
use App\Helper\Orchid\OrchidTable;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(OrchidComponent::class,function (){
            return new OrchidComponent();
        });

        $this->app->singleton(OrchidTable::class,function ($app){
            $orchidComponent = $app->make(OrchidComponent::class);
            return new OrchidTable($orchidComponent);
        });

        $this->app->singleton(OrchidRow::class,function (){
            return new OrchidRow();
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
