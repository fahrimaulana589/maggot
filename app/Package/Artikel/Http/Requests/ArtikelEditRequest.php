<?php

namespace App\Package\Artikel\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArtikelEditRequest extends ArtikelRequest
{
    public function rules(): array
    {

        $data = request()->route("artikel");

        return [
            "artikel.title" => [
                "required",
                "unique:artikels,title,".$data
            ],
            "artikel.content" => "required",
            "artikel.image" => "required",
        ];

    }

}
