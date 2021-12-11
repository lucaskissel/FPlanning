<?php

namespace App\Http\Requests\Api;

class CreateTypePaymentRequest extends BaseRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'         => "required|string",
            'description'  => "required|string",
        ];
    }
}
