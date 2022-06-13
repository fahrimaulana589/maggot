<?php

namespace App\Package\Base\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrchidRequest extends FormRequest
{
    public function messages()
    {
        return [
            "required" => ":attribute harus diisi",
            "unique" => ":attribute sudah digunakan",
            "numeric" => ":attribute harusa menggunkan angka",
            "boolean" => ":attribute harus menggunkan angka 1 atu 0",
        ];
    }
}
