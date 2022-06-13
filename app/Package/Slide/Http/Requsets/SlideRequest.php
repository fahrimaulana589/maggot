<?php

namespace App\Package\Slide\Http\Requsets;

use App\Package\Base\Http\Requests\OrchidRequest;

class SlideRequest extends OrchidRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function attributes()
    {
        return [
            "slide.image" => "Gambar",
            "slide.url" => "Alamat",
        ];
    }

}
