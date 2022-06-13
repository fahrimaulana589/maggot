<?php

namespace App\Package\Menu\service;

use App\Package\Menu\database\repository\MenuRepository;
use App\Package\Menu\Http\Requsets\MenuAddRequest;
use App\Package\Menu\Http\Requsets\MenuEditRequest;
use App\Package\Menu\Model\Menu;
use App\Package\Page\Http\Requests\PageEditRequest;

class MenuService
{
    public MenuRepository $menuRepository;

    /**
     * @param MenuRepository $menuRepository
     */
    public function __construct(MenuRepository $menuRepository)
    {
        $this->menuRepository = $menuRepository;
    }

    public function getAll()
    {
        return $this->menuRepository->getAll();
    }

    public function getAllMainMenu(){

        return $this->menuRepository->getAllMainMenu();
    }

    public function create(MenuAddRequest $request){

        $data = $request->validated();

        $is_parent = array_key_exists("is_parent",$data);
        $parent = array_key_exists("parent",$data);

        if($is_parent){
            $data["parent"] = null;
        }else {
            $data["is_parent"] = 0;
            if (!$parent){
                $data["parent"] = null;
            }
        }

        $this->menuRepository->create($data);

    }

    public function edit(MenuEditRequest $request,Menu $menu){

        $data = $request->validated();

        $is_parent = array_key_exists("is_parent",$data);
        $parent = array_key_exists("parent",$data);

        if($is_parent){
            $data["parent"] = null;
        }else {
            $data["is_parent"] = 0;
            if (!$parent){
                $data["parent"] = null;
            }
        }

        $this->menuRepository->edit($data,$menu);

    }

    public function delete(Menu $menu){

        $this->menuRepository->delete($menu);
    }

}
