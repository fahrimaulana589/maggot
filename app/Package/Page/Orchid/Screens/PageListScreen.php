<?php

namespace App\Package\Page\Orchid\Screens;

use App\Helper\Orchid\OrchidComponent;
use App\Package\Page\database\repository\PageRepository;
use App\Package\Page\Model\Page;
use App\Package\Page\Orchid\Layouts\PageListLayout;
use App\Package\Page\service\PageService;
use Orchid\Screen\Screen;
use function PHPUnit\Framework\assertEquals;

class PageListScreen extends Screen
{
    public $permission = "platform.websites.pages";
    public OrchidComponent $orchidComponet;
    public PageService $pageService;

    /**
     * @param OrchidComponent $orchidComponet
     * @param PageService $pageService
     */
    public function __construct(OrchidComponent $orchidComponet, PageService $pageService)
    {
        $this->orchidComponet = $orchidComponet;
        $this->pageService = $pageService;
    }


    /**
     * Query data.
     *
     * @return array
     */
    public function query(): iterable
    {
        $pages = $this->pageService->getAll();

        return [
            'pages' => $pages
        ];
    }

    /**
     * Display header name.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Daftar Page';
    }

    /**
     * Button commands.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            $this->orchidComponet->linkAdd()
                ->route("platform.websites.pages.add")
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
            PageListLayout::class
        ];
    }

    public function remove(Page $page){

        $this->pageService->delete($page);

        $this->orchidComponet->toastSukses("Hapus","Page");

    }
}
