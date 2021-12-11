<?php

namespace App\Http\Requests\Api;

class UpdateInputRequest extends BaseRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'id'          => "required|integer",
            'source'      => "required|string",
            'description' => "required|string",
            'value'       => "required|numeric",
            'inputDate'   => "required|date",
        ];
    }

     /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'date' => 'the param :attribute must be in valid format ISO-8601 yyyy-mm-dd',
        ];
    }
}
