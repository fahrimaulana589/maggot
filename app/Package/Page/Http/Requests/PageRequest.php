<?php

namespace App\Package\Page\Http\Requests;

use App\Package\Base\Http\Requests\OrchidRequest;

class PageRequest extends OrchidRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function attributes()
    {
        return [
            "page.title" => "Judul",
            "page.content" => "Content",
            "page.image" => "Gambar",
        ];
    }
}
