<?php

namespace App\Http\Requests\Common;

use Illuminate\Foundation\Http\FormRequest;

class CommonAuthorizedRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }
}
