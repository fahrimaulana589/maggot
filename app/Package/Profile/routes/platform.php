<?php


use App\Package\Profile\Orchid\Screens\ProfileEditScreen;
use Tabuna\Breadcrumbs\Trail;

Route::screen('profile-aplikasi', ProfileEditScreen::class)
    ->name('platform.websites.profile')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.main')
            ->push(__('ProfileController'), route('platform.websites.profile'));
    });
