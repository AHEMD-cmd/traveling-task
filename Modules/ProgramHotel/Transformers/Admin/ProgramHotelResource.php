<?php

namespace Modules\ProgramHotel\Transformers\Admin;

use Illuminate\Http\Resources\Json\JsonResource;

class ProgramHotelResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'program' => $this->program->title,
            'city_id' => $this->city->name,
            'hotel_id' => $this->hotel->name,
            'residence_type' => $this->residence_type,
            'num_of_days' => $this->num_of_days,
        ];
    }
}
