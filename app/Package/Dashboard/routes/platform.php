<?php

// Main

use App\Package\Dashboard\Orchid\Screens\DashboardScreen;
use Tabuna\Breadcrumbs\Trail;

Route::screen('/dashboard', DashboardScreen::class)
    ->name('platform.main')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->push(__('Dashboard'), route('platform.main'));
        }
    );
