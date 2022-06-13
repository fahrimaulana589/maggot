<?php

namespace App\Package\Tutorial\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TutorialEditRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            "tutorial.title" => "required",
            "tutorial.description" => "required",
            "tutorial.image" => "required"
        ];
    }

}
