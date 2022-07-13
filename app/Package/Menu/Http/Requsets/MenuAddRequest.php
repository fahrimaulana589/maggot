<?php

namespace App\Package\Menu\Http\Requsets;

use App\Package\Menu\Model\Menu;
use Illuminate\Foundation\Http\FormRequest;

class MenuAddRequest extends MenuRequest
{
    public function rules(): array
    {

        return [
            "title" => "required|unique:menus,title",
            "posision" => "required",
            "url" => "required",
        ];
    }

}
