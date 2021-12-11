<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class InputResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id'           => $this->ID,
            'source'       => $this->SOURCE,
            'description'  => $this->DESCRIPTION,
            'value'        => number_format($this->VALUE, 2),
            'inputDate'    => $this->INPUTDATE,
        ];
    }
}
