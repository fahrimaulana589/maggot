<?php

namespace App\Package\Menu\Orchid\Screens;

use App\Helper\Orchid\OrchidComponent;
use App\Package\Menu\Model\Menu;
use App\Package\Menu\Orchid\Layouts\MenuListLayout;
use App\Package\Menu\service\MenuService;
use Orchid\Screen\Screen;

class MenuListScreen extends Screen
{
    public $permission = "platform.websites.menus";
    public MenuService $menuService;
    public OrchidComponent $orchidComponent;
    /**
     * @param MenuService $menuService
     */
    public function __construct(MenuService $menuService,OrchidComponent $orchidComponent)
    {
        $this->orchidComponent = $orchidComponent;
        $this->menuService = $menuService;
    }


    /**
     * Query data.
     *
     * @return array
     */
    public function query(): iterable
    {
        $menus = $this->menuService->getAll();
        return [
            "menus" => $menus
        ];
    }

    /**
     * Display header name.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Daftar Menu';
    }

    /**
     * Button commands.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            $this->orchidComponent->linkAdd()
                ->route("platform.websites.menus.add")
        ];
    }

    /**
     * Views.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): iterable
    {
        return [
            MenuListLayout::class
        ];
    }

    public function remove(Menu $menu){

        $this->menuService->delete($menu);

        $this->orchidComponent->toastSukses("Hapus","Menu");

    }
}
