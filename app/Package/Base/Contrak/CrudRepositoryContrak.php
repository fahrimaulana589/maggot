<?php

namespace App\Package\Base\Contrak;

use App\Package\Menu\Model\Menu;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Http\FormRequest;

interface CrudRepositoryContrak
{
    public function getAll();

    public function create($data);

    public function edit($data,Model $menu);

    public function delete(Model $menu);

}
