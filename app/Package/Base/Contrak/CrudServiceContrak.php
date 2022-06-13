<?php

namespace App\Package\Base\Contrak;

use App\Package\Menu\Model\Menu;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Http\FormRequest;

interface CrudServiceContrak
{
    public function getAll();

    public function create(FormRequest $request);

    public function edit(FormRequest $request,Model $menu);

    public function delete(Model $menu);

}
