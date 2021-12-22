<?php

namespace App\Http\Requests\Api;

class UpdateTypePaymentRequest extends BaseRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'id'           => "required|integer",
            'name'         => "required|string",
            'description'  => "required|string"
        ];
    }
}
