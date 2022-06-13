<?php

namespace App\Package\Menu\Orchid\Screens;

use App\Helper\Orchid\OrchidComponent;
use App\Package\Menu\Http\Requsets\MenuAddRequest;
use App\Package\Menu\Orchid\Layouts\MenuAddEditLayout;
use App\Package\Menu\Orchid\Layouts\MenuAddEditListener;
use App\Package\Menu\service\MenuService;
use Orchid\Alert\Toast;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;

class MenuAddScreen extends Screen
{
    public $permission = "platform.websites.menus";
    public MenuService $menuService;
    public OrchidComponent $orchidComponent;

    /**
     * @param MenuService $menuService
     * @param OrchidComponent $orchidComponent
     */
    public function __construct(MenuService $menuService, OrchidComponent $orchidComponent)
    {
        $this->menuService = $menuService;
        $this->orchidComponent = $orchidComponent;
    }


    /**
     * Query data.
     *
     * @return array
     */
    public function query(): iterable
    {
        return [];
    }

    /**
     * Display header name.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Buat Menu';
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
            $this->orchidComponent->buttonSave()
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

    public function save(MenuAddRequest $request){

        $this->menuService->create($request);

        $this->orchidComponent->toastSukses("Simpan","Menu");

        return redirect()->route("platform.websites.menus");
    }
}
