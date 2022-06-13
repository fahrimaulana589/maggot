<?php

namespace App\Package\Page\database\repository;

use App\Package\Page\Model\Page;
use PHPUnit\Exception;

class PageRepository
{

    public function getAll()
    {

        return Page::all();
    }

    public function create($data) : Page {

        return Page::create($data["page"]);
    }

    public function edit($data,Page $page)
    {

        return $page->fill($data["page"])->save();
    }

    public function delete(Page $page){

        return $page->delete();
    }

    public function getBySlug(String $slug)
    {
        return Page::where("slug","=","$slug")->firstOrFail();
    }
}
