<?php

namespace App\Package\Page\Orchid\Screens;

use App\Package\Page\Model\Page;
use App\Package\Page\service\PageService;
use Orchid\Screen\Screen;

class PageShowScreen extends Screen
{
    public PageService $pageService;
    public Page $page;

    /**
     * @param PageService $pageService
     */
    public function __construct(PageService $pageService)
    {
        $this->pageService = $pageService;
    }

    /**
     * Query data.
     *
     * @return array
     */
    public function query($page): iterable
    {

        $page = $this->pageService->getBySlug($page);
        $this->page = $page;

        return [];
    }

    /**
     * Display header name.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return $this->page->title;
    }

    /**
     * Button commands.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [];
    }

    /**
     * Views.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): iterable
    {
        return [];
    }
}
