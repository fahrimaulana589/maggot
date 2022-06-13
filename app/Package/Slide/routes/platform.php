<?php


use App\Package\Menu\Orchid\Screens\MenuAddScreen;
use App\Package\Menu\Orchid\Screens\MenuEditScreen;
use App\Package\Menu\Orchid\Screens\MenuListScreen;
use App\Package\Slide\Orchid\Screens\SlideAddScreen;
use App\Package\Slide\Orchid\Screens\SlideEditScreen;
use App\Package\Slide\Orchid\Screens\SlideListScreen;
use Tabuna\Breadcrumbs\Trail;

Route::screen('slides', SlideListScreen::class)
    ->name('platform.websites.slides')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.main')
            ->push(__('Slide'), route('platform.websites.slides'));
    });

Route::screen('slides/add', SlideAddScreen::class)
    ->name('platform.websites.slides.add')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.websites.slides')
            ->push(__('Buat'), route('platform.websites.slides.add'));
    });

Route::screen('slides/edit/{menu}', SlideEditScreen::class)
    ->name('platform.websites.slides.edit')
    ->breadcrumbs(function (Trail $trail,$menu) {
        return $trail
            ->parent('platform.websites.slides')
            ->push(__('Edit'), route('platform.websites.slides.edit',[$menu]));
    })
    ->whereNumber(["menu"]);
