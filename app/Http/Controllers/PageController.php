<?php

namespace App\Http\Controllers;

use App\Package\Page\Model\Page;
use App\Package\Page\service\PageService;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public PageService $pageService;

    /**
     * @param PageService $pageService
     */
    public function __construct(PageService $pageService)
    {
        $this->pageService = $pageService;
    }

    public function get(Page $page){

        return response()->json([
            "page" => $page
        ]);
    }

    public function getAll(){

        return response()->json([
           "pages" => $this->pageService->getAll()
        ]);
    }

    public function search(){


    }
}
