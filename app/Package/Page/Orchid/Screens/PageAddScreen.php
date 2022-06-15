<?php

namespace App\Package\Page\Orchid\Screens;

use App\Helper\Orchid\OrchidComponent;
use App\Helper\Orchid\OrchidRow;
use App\Package\Page\Http\Requests\PageAddRequest;
use App\Package\Page\Orchid\Layouts\PageAddEditLayout;
use App\Package\Page\service\PageService;
use Illuminate\Http\Client\Request;
use Orchid\Screen\Fields\Picture;
use Orchid\Screen\Fields\Quill;
use Orchid\Screen\Fields\Upload;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;

class PageAddScreen extends Screen
{
    public $permission = "platform.websites.pages";
    public OrchidComponent $orchidComponent;
    public OrchidRow $orchidRow;
    public PageService $pageService;

    public function __construct(OrchidComponent $orchidComponent,OrchidRow $orchidRow,PageService $pageService)
    {
        $this->pageService = $pageService;
        $this->orchidRow = $orchidRow;
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
        return 'Buat PageController';
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
                ->route("platform.websites.pages"),
            $this->orchidComponent->buttonSave()
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
            Layout::block(PageAddEditLayout::class)
                ->title("PageController")
                ->description(
                    "Silahkan masukan data data berikut untuk membuta page baru"
                ),
            Layout::rows([
                $this->orchidRow->rowImage("page.image","Gambar"),
            ]),
            Layout::rows([
                $this->orchidRow->rowContent("page.content","Content"),
            ]),

        ];
    }

    public function save(PageAddRequest $request){

        $this->pageService->create($request);
        $this->orchidComponent->toastSukses("Tambah","PageController");

        return redirect()->route("platform.websites.pages");

    }
}
