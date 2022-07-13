<?php


use App\Package\pengunjung\Orchid\Screens\PengunjungAddScreen;
use App\Package\pengunjung\Orchid\Screens\PengunjungEditScreen;
use App\Package\pengunjung\Orchid\Screens\PengunjungListScreen;
use Illuminate\Support\Facades\Route;
use Tabuna\Breadcrumbs\Trail;

// Platform > System > Users > Create
Route::screen('pengunjung/{pengunjung}/edit', PengunjungEditScreen::class)
    ->name('platform.pengunjung.edit')
    ->breadcrumbs(function (Trail $trail,$pengunjung) {
        return $trail
            ->parent('platform.pengunjung')
            ->push(__('Create'), route('platform.pengunjung.edit',$pengunjung));
    });

// Platform > System > Users > Create
Route::screen('pengunjung/add', PengunjungAddScreen::class)
    ->name('platform.pengunjung.add')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.pengunjung')
            ->push(__('Create'), route('platform.pengunjung.add'));
    });

// Platform > System > Users > User
Route::screen('pengunjung', PengunjungListScreen::class)
    ->name('platform.pengunjung')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.index')
            ->push(__('Pengunjung'), route('platform.pengunjung'));
    });

