<?php

namespace App\Package\Artikel\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArtikelAddRequest extends ArtikelRequest
{
    public function rules(): array
    {
        return [
            "artikel.title" => [
                "required",
                "unique:artikels,title"
            ],
            "artikel.content" => "required",
            "artikel.image" => "required",
        ];
    }

}
