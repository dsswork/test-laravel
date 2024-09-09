<?php

namespace App\Http\Requests\Submission;

use App\Http\Requests\Common\CommonAuthorizedRequest;

class StoreSubmissionRequest extends CommonAuthorizedRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'name' => [
                'required',
                'string',
                'max:250',
            ],
            'email' => [
                'required',
                'string',
                'email',
                'max:250',
            ],
            'message' => [
                'required',
                'string',
                'max:4000',
            ]
        ];
    }
}
