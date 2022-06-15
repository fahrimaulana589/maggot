<?php

namespace App\Package\Tutorial\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StepAddRequest extends StepRequest
{
    public function rules(): array
    {
        return [
            "step.title" => "required",
            "step.description" => "required",
            "step.video" => "required"
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
