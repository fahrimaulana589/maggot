<?php

namespace App\Package\Page\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PageEditRequest extends PageRequest
{
    public function rules(): array
    {

        $data = request()->route("page");

        return [
            "page.title" => [
                "required",
                "unique:pages,title,".$data
            ],
            "page.content" => "required",
            "page.image" => "required",
        ];
    }

}
