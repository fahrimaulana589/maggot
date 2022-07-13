<?php

namespace App\Package\Menu\Http\Requsets;

use App\Package\Menu\Model\Menu;
use Illuminate\Foundation\Http\FormRequest;

class MenuEditRequest extends MenuRequest
{
    public function rules(): array
    {
        $id = request()->route("menu");

        return [
            "title" => "required|unique:menus,title,".$id,
            "posision" => "required",
            "url" => "required",
        ];
    }

}
