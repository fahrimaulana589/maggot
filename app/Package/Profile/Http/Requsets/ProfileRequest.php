<?php

namespace App\Package\Profile\Http\Requsets;

use App\Package\Base\Http\Requests\OrchidRequest;

class ProfileRequest extends OrchidRequest
{
    public function attributes()
    {
        return [
            "profile.nama_aplikasi" => "Nama Aplikasi",
            'profile.favicon' => "Icon",
            "profile.icon" => "Brand",
            "profile.phone" => "Nomer Telpon",
            "profile.slogan" => "Slogan",
            "profile.alamat" => "Alamat",
            "profile.map" => "Peta",
        ];
    }

}
