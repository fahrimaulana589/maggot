<?php

namespace App\Package\Tutorial\Http\Requests;

use App\Package\Base\Http\Requests\OrchidRequest;
use Illuminate\Foundation\Http\FormRequest;

class TutorialRequest extends OrchidRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function attributes()
    {
        return [
            "tutorial.title" => "Judul",
            "tutorial.description" => "Deskripsi",
            "tutorial.image" => "Gambar"
        ];
    }


}
