<?php

use App\Package\Page\Orchid\Screens\PageAddScreen;
use App\Package\Page\Orchid\Screens\PageEditScreen;
use App\Package\Page\Orchid\Screens\PageListScreen;
use App\Package\Tutorial\Orchid\Screens\TutorialAddScreen;
use App\Package\Tutorial\Orchid\Screens\TutorialEditScreen;
use App\Package\Tutorial\Orchid\Screens\TutorialListScreen;
use App\Package\Tutorial\Orchid\Screens\TutorialShowScreen;
use App\Package\user\Orchid\Screens\User\UserProfileScreen;
use Illuminate\Support\Facades\Route;
use Tabuna\Breadcrumbs\Trail;

Route::screen('tutorials', TutorialListScreen::class)
    ->name('platform.websites.tutorials')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.main')
            ->push(__('Tutorial'), route('platform.websites.tutorials'));
    });

Route::screen('tutorials/add', TutorialAddScreen::class)
    ->name('platform.websites.tutorials.add')
    ->breadcrumbs(function (Trail $trail) {
        return $trail
            ->parent('platform.websites.tutorials')
            ->push(__('Buat'), route('platform.websites.tutorials.add'));
    });

Route::screen('tutorials/edit/{tutorial}', TutorialEditScreen::class)
    ->name('platform.websites.tutorials.edit')
    ->breadcrumbs(function (Trail $trail,$tutorial) {
        return $trail
            ->parent('platform.websites.tutorials')
            ->push(__('Edit'), route('platform.websites.tutorials.edit',[$tutorial]));
    })
    ->whereNumber(["tutorial"]);

Route::screen('tutorials/show/{tutorial}', TutorialShowScreen::class)
    ->name('platform.websites.tutorials.show')
    ->breadcrumbs(function (Trail $trail,$tutorial) {
        return $trail
            ->parent('platform.websites.tutorials')
            ->push(__('Steps'), route('platform.websites.tutorials.show',[$tutorial]));
    })
    ->whereNumber(["tutorial"]);

Route::screen('tutorials/show/{tutorial}/add', TutorialShowScreen::class)
    ->name('platform.websites.tutorials.steps.add')
    ->breadcrumbs(function (Trail $trail,$tutorial) {
        return $trail
            ->parent('platform.websites.tutorials.show')
            ->push(__('Edit'), route('platform.websites.tutorials.edit',[$tutorial]));
    })
    ->whereNumber(["tutorial"]);

Route::screen('tutorials/show/{tutorial}/edit/{step}', TutorialShowScreen::class)
    ->name('platform.websites.tutorials.steps.edit')
    ->breadcrumbs(function (Trail $trail,$tutorial,$step) {
        return $trail
            ->parent('platform.websites.tutorials.show')
            ->push(__('Edit'), route('platform.websites.tutorials.edit',[$tutorial,$step]));
    })
    ->whereNumber(["tutorial"]);


