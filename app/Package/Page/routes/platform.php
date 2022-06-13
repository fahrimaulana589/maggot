<?php

use App\Package\Page\Orchid\Screens\PageAddScreen;
use App\Package\Page\Orchid\Screens\PageEditScreen;
use App\Package\Page\Orchid\Screens\PageListScreen;
use App\Package\user\Orchid\Screens\User\UserProfileScreen;
use Tabuna\Breadcrumbs\Trail;

Route::screen('pages', PageListScreen::class)
    ->name('platform.websites.pages')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.main')
            ->push(__('Page'), route('platform.websites.pages'));
    });

Route::screen('pages/add', PageAddScreen::class)
    ->name('platform.websites.pages.add')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.websites.pages')
            ->push(__('Buat'), route('platform.websites.pages.add'));
    });

Route::screen('pages/edit/{page}', PageEditScreen::class)
    ->name('platform.websites.pages.edit')
    ->breadcrumbs(function (Trail $trail,$page) {
        return $trail
            ->parent('platform.websites.pages')
            ->push(__('Edit'), route('platform.websites.pages.edit',[$page]));
    })
    ->whereNumber(["page"])
;
