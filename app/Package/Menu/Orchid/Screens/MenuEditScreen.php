<?php

namespace App\Package\Menu\Orchid\Screens;

use App\Helper\Orchid\OrchidComponent;
use App\Package\Menu\Http\Requsets\MenuEditRequest;
use App\Package\Menu\Model\Menu;
use App\Package\Menu\Orchid\Layouts\MenuAddEditLayout;
use App\Package\Menu\Orchid\Layouts\MenuAddEditListener;
use App\Package\Menu\service\MenuService;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;

class MenuEditScreen extends Screen
{
    public $permission = "platform.websites.menus";
    public Menu $menu;
    public OrchidComponent $orchidComponent;
    public MenuService $menuService;

    /**
     * @param OrchidComponent $orchidComponent
     */
    public function __construct(OrchidComponent $orchidComponent,MenuService $menuService)
    {
        $this->menuService = $menuService;
        $this->orchidComponent = $orchidComponent;
    }

    /**
     * Query data.
     *
     * @return array
     */
    public function query(Menu $menu): iterable
    {
        $this->menu = $menu;
        session(["is_parent" => $this->menu->is_parent]);
        return [
            "title" => $this->menu->title,
            "url" => $this->menu->url,
            "posision" => $this->menu->posision,
            "parent" => $this->menu->parent,
        ];
    }

    public function asyncSum(int $is_parent = null)
    {

        if(session("is_parent",0) == 0){
            session(['is_parent' => 1]);
        }
        else if (session("is_parent",0) == 1){
            session(['is_parent' => 0]);
        }

        return [
            'is_parent' => session("is_parent",0),
        ];

    }

    /**
     * Display header name.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return "Menu id : {$this->menu->id}";
    }

    /**
     * Button commands.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            $this->orchidComponent->linkBack()
                ->route("platform.websites.menus"),
            $this->orchidComponent->buttonEdit(),
            $this->orchidComponent->buttonDelete($this->menu->id)
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
            Layout::block(MenuAddEditLayout::class)
                ->title("Menu")
                ->description("Mohon masukan data menu"),
            Layout::block(MenuAddEditListener::class)
        ];
    }

    public function edit(MenuEditRequest $request,Menu $menu){

        $this->menuService->edit($request,$menu);

        $this->orchidComponent->toastSukses("Edit","Menu");

    }

    public function remove(Menu $menu){

        $this->menuService->delete($menu);

        $this->orchidComponent->toastSukses("Hapus","Menu");

        return redirect()->route("platform.websites.menus");
    }
}
