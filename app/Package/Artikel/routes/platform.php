<?php

use App\Package\Artikel\Orchid\Screens\ArtikelAddScreen;
use App\Package\Artikel\Orchid\Screens\ArtikelEditScreen;
use App\Package\Artikel\Orchid\Screens\ArtikelListScreen;
use App\Package\user\Orchid\Screens\User\UserProfileScreen;
use Illuminate\Support\Facades\Route;
use Tabuna\Breadcrumbs\Trail;

Route::screen('artikels', ArtikelListScreen::class)
    ->name('platform.websites.artikels')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.main')
            ->push(__('Artikel'), route('platform.websites.artikels'));
    });

Route::screen('artikels/add', ArtikelAddScreen::class)
    ->name('platform.websites.artikels.add')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.websites.artikels')
            ->push(__('Buat'), route('platform.websites.artikels.add'));
    });

Route::screen('artikels/edit/{artikel}', ArtikelEditScreen::class)
    ->name('platform.websites.artikels.edit')
    ->breadcrumbs(function (Trail $trail,$artikel) {
        return $trail
            ->parent('platform.websites.artikels')
            ->push(__('Edit'), route('platform.websites.artikels.edit',[$artikel]));
    })
    ->whereNumber(["artikel"])
;
