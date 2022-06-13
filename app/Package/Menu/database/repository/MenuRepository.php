<?php

namespace App\Package\Menu\database\repository;

use App\Package\Menu\Model\Menu;

class MenuRepository
{

    public function getAll()
    {

        return Menu::all();
    }

    public function getAllMainMenu(){

        return Menu::where("is_parent","=",1)->orderBy("posision","ASC")->get();
    }

    public function create($data) : Menu {

        return Menu::create($data);
    }

    public function edit($data,Menu $menu){

        return $menu->fill($data)->save();
    }

    public function delete(Menu $menu){

        return $menu->delete();
    }

}
