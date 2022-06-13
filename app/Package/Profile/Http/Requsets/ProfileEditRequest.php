<?php

namespace App\Package\Profile\Http\Requsets;

use Illuminate\Foundation\Http\FormRequest;

class ProfileEditRequest extends ProfileRequest
{
    public function rules(): array
    {
        return [
            "profile.nama_aplikasi" => "required",
            'profile.favicon' => "required",
            "profile.icon" => "required",
            "profile.phone" => "required",
            "profile.slogan" => "required",
            "profile.alamat" => "required",
            "profile.map" => "required",
        ];
    }

}
