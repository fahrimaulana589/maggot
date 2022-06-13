<?php

namespace App\Package\Tutorial\Http\Requests;

use App\Package\Base\Http\Requests\OrchidRequest;
use Illuminate\Foundation\Http\FormRequest;

class StepRequest extends OrchidRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function attributes(): array
    {
        return [
            "step.title" => "Judul",
            "step.description" => "Deskripsi",
            "step.video" => "Vidio"
        ];
    }
}
