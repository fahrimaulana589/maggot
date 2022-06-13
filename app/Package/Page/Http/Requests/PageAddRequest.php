<?php

namespace App\Package\Page\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PageAddRequest extends PageRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules() : array
    {
        return [
            "page.title" => [
                "required",
                "unique:pages,title"
            ],
            "page.content" => "required",
            "page.image" => "required",
        ];
    }
}
