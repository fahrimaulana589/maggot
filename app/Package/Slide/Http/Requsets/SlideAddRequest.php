<?php

namespace App\Package\Slide\Http\Requsets;

use Illuminate\Foundation\Http\FormRequest;

class SlideAddRequest extends SlideRequest
{
    public function rules(): array
    {
        return [
            "slide.image" => "required",
            "slide.url" => "required"
        ];
    }

}
