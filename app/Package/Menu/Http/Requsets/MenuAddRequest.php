<?php

namespace App\Package\Menu\Http\Requsets;

use App\Package\Menu\Model\Menu;
use Illuminate\Foundation\Http\FormRequest;

class MenuAddRequest extends MenuRequest
{
    public function rules(): array
    {
        $data = $this->request->all();
        $parent_reqired = "";

        $is_parent = array_key_exists("is_parent",$data);

        if (!$is_parent){
            $parents = Menu::active()->get();
            $parents = count($parents);
            if($parents > 0){
                $parent_reqired = "|required";
            }
        }

        return [
            "title" => "required|unique:menus,title",
            'parent' => "numeric$parent_reqired",
            "is_parent" => "boolean",
            "posision" => "required",
            "url" => "required",
        ];
    }

}
