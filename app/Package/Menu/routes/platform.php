<?php


use App\Package\Menu\Orchid\Screens\MenuAddScreen;
use App\Package\Menu\Orchid\Screens\MenuEditScreen;
use App\Package\Menu\Orchid\Screens\MenuListScreen;
use Tabuna\Breadcrumbs\Trail;

Route::screen('menus', MenuListScreen::class)
    ->name('platform.websites.menus')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.main')
            ->push(__('Menu'), route('platform.websites.menus'));
    });

Route::screen('menus/add', MenuAddScreen::class)
    ->name('platform.websites.menus.add')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.websites.menus')
            ->push(__('Buat'), route('platform.websites.menus.add'));
    });

Route::screen('menus/edit/{menu}', MenuEditScreen::class)
    ->name('platform.websites.menus.edit')
    ->breadcrumbs(function (Trail $trail,$menu) {
        return $trail
            ->parent('platform.websites.menus')
            ->push(__('Edit'), route('platform.websites.menus.edit',[$menu]));
    })
    ->whereNumber(["menu"]);
