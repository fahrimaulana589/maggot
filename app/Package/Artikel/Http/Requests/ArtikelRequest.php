<?php

namespace App\Package\Artikel\Http\Requests;

use App\Package\Base\Http\Requests\OrchidRequest;
use Illuminate\Foundation\Http\FormRequest;

class ArtikelRequest extends OrchidRequest
{
    public function attributes()
    {
        return [
            "artikel.title" => "Judul",
            "artikel.content" => "Content",
            "artikel.image" => "Gambar",
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
