<?php

namespace App\Package\Tutorial\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StepEditRequest extends StepRequest
{
    public function rules(): array
    {
        return [
            "step.title" => "required",
            "step.description" => "required",
            "step.video" => "required"
        ];
    }
}
