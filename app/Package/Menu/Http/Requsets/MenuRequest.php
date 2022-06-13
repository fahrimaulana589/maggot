<?php

namespace App\Package\Menu\Http\Requsets;

use App\Package\Base\Http\Requests\OrchidRequest;

class MenuRequest extends OrchidRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function attributes()
    {
        return [
            "title" => "Judul",
            'parent' => "Sub menu",
            "is_parent" => "Menu utama",
            "posision" => "Posisi",
            "url" => "Alamat",
        ];
    }


}
