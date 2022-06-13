<?php

namespace App\Package\Page\service;

use App\Package\Page\database\repository\PageRepository;
use App\Package\Page\Http\Requests\PageAddRequest;
use App\Package\Page\Http\Requests\PageEditRequest;
use App\Package\Page\Model\Page;

class PageService
{
    public PageRepository $pageRepository;

    public function __construct(PageRepository $pageRepository)
    {
        $this->pageRepository = $pageRepository;

    }

    public function getAll()
    {
        return $this->pageRepository->getAll();
    }

    public function getBySlug($slug){

        return $this->pageRepository->getBySlug($slug);
    }

    public function create(PageAddRequest $request){

        $data = $request->validated();
        $data["page"]["slug"] = \Str::slug($data["page"]["title"]);

        $this->pageRepository->create($data);

    }

    public function edit(PageEditRequest $request,Page $page){

        $data = $request->validated();
        $data["page"]["slug"] = \Str::slug($data["page"]["title"]);

        $this->pageRepository->edit($data,$page);

    }

    public function delete(Page $page){

        $this->pageRepository->delete($page);
    }

}
