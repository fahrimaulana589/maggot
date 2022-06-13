<?php

use App\Package\Page\Orchid\Screens\PageAddScreen;
use App\Package\Page\Orchid\Screens\PageEditScreen;
use App\Package\Page\Orchid\Screens\PageListScreen;
use App\Package\Page\Orchid\Screens\PageShowScreen;
use App\Package\user\Orchid\Screens\User\UserProfileScreen;
use Tabuna\Breadcrumbs\Trail;

Route::screen('page/{page:slug}', PageShowScreen::class)
    ->name('platform.websites.pages.show')
    ->breadcrumbs(function (Trail $trail) {
        return $trail;
    })
;
