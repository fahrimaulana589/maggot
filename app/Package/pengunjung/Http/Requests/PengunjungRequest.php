<?php

namespace App\Package\pengunjung\Http\Requests;

use App\Package\Base\Http\Requests\OrchidRequest;
use Illuminate\Foundation\Http\FormRequest;

class PengunjungRequest extends OrchidRequest
{

    public function attributes()
    {
        return [
            "pengunjung.name" => "Nama",
            "pengunjung.password" => "Password",
            "pengunjung.email" => "Email",
            "pengunjung.level" => "Level",

        ];
    }

}
