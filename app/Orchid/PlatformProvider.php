<?php

declare(strict_types=1);

namespace App\Orchid;

use App\Package\Menu\service\MenuService;
use Orchid\Platform\Dashboard;
use Orchid\Platform\ItemPermission;
use Orchid\Platform\OrchidServiceProvider;
use Orchid\Screen\Actions\Menu;
use Orchid\Support\Color;

class PlatformProvider extends OrchidServiceProvider
{
    public MenuService $menuService;
    /**
     * @param Dashboard $dashboard
     */
    public function boot(Dashboard $dashboard): void
    {
        parent::boot($dashboard);

        // ...
    }

    /**
     * @return Menu[]
     */
    public function registerMainMenu(): array
    {
        $menuPanel = [

            Menu::make(__('Dashboard'))
                ->icon('speedometer')
                ->route('platform.main')
                ->permission('platform.systems.dashboard'),

            Menu::make(__('Profile'))
                ->icon('people')
                ->route('platform.websites.profile')
                ->permission('platform.websites.profile')
                ->title(__('Aplikasi')),

            Menu::make(__(' Menu'))
                ->icon('link')
                ->route('platform.websites.menus')
                ->permission('platform.websites.menus'),

            Menu::make(__('Slide'))
                ->icon('layers')
                ->route('platform.websites.slides')
                ->permission('platform.websites.slides'),

            Menu::make(__('Tutorial'))
                ->icon('layers')
                ->title("Module")
                ->route('platform.websites.tutorials')
                ->permission('platform.websites.tutorials'),

            Menu::make(__('Page'))
                ->icon('screen-desktop')
                ->route('platform.websites.pages')
                ->permission('platform.websites.pages'),

            Menu::make(__('Users'))
                ->icon('user')
                ->route('platform.systems.users')
                ->permission('platform.systems.users')
                ->title(__('Access rights')),

            Menu::make(__('Roles'))
                ->icon('lock')
                ->route('platform.systems.roles')
                ->permission('platform.systems.roles'),
        ];

        return $menuPanel;
    }

    /**
     * @return Menu[]
     */
    public function registerProfileMenu(): array
    {
        return [
            Menu::make('ProfileController')
                ->route('platform.profile')
                ->icon('user'),
        ];
    }

    /**
     * @return ItemPermission[]
     */
    public function registerPermissions(): array
    {
        return [
            ItemPermission::group(__('System'))
                ->addPermission('platform.systems.roles', __('Roles'))
                ->addPermission('platform.systems.users', __('Users'))
                ->addPermission('platform.systems.dashboard', __('Dashboard'))
            ,
            ItemPermission::group(__('Website'))
                ->addPermission('platform.websites.profile', __(' Profile'))
                ->addPermission('platform.websites.menus', __(' menu'))
                ->addPermission('platform.websites.pages', __(' Page'))
                ->addPermission('platform.websites.slides', __(' Slide'))
                ->addPermission('platform.websites.tutorials', __('Tutorial'))
            ,
        ];
    }
}
