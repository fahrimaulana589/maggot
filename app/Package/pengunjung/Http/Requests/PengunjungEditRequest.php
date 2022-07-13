<?php

namespace App\Package\pengunjung\Http\Requests;


class PengunjungEditRequest extends PengunjungRequest
{
    public function rules(): array
    {
        $id = request()->route("pengunjung");

        return [
            "pengunjung.name" => "required|unique:pengunjungs,name,{$id}",
            "pengunjung.password" => "",
            "pengunjung.email" => "required|email|unique:pengunjungs,email,{$id}",
            "pengunjung.level" => "required"
        ];
    }
}
