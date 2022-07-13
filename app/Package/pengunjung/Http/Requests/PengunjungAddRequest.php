<?php

namespace App\Package\pengunjung\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PengunjungAddRequest extends PengunjungRequest
{
    public function rules(): array
    {
        return [
            "pengunjung.name" => "required|unique:pengunjungs,name",
            "pengunjung.password" => "required",
            "pengunjung.email" => "required|email|unique:pengunjungs,email",
            "pengunjung.level" => "required"
        ];
    }
}
