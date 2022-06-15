<?php

namespace App\Package\Page\Orchid\Screens;

use App\Helper\Orchid\OrchidComponent;
use App\Helper\Orchid\OrchidRow;
use App\Package\Page\Http\Requests\PageEditRequest;
use App\Package\Page\Model\Page;
use App\Package\Page\Orchid\Layouts\PageAddEditLayout;
use App\Package\Page\service\PageService;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;

class PageEditScreen extends Screen
{
    public $permission = "platform.websites.pages";
    public Page $page;
    public OrchidComponent $orchidComponent;
    public OrchidRow $orchidRow;

    /**
     * @param OrchidComponent $orchidComponent
     */
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
    public function query(Page $page): iterable
    {
        $this->page = $page;
        return [
            "page" => $this->page
        ];
    }

    /**
     * Display header name.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return "Edit page id : {$this->page->id}";
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
            $this->orchidComponent->buttonEdit(),
            $this->orchidComponent->buttonDelete($this->page->id)
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

    public function edit(PageEditRequest $request,Page $page){

        $this->pageService->edit($request,$page);

        $this->orchidComponent->toastSukses("Edit","PageController");
    }

    public function remove(Page $page){

        $this->pageService->delete($page);

        $this->orchidComponent->toastSukses("Hapus","PageController");

        return redirect()->route("platform.websites.pages");
    }
}
