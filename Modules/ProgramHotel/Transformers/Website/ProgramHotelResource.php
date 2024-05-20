<?php

namespace Modules\ProgramHotel\Transformers\Website;

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
            'city_id' => $this->city_id,
            'hotel_id' => $this->hotel_id,
            'residence_type' => $this->residence_type,
            'num_of_days' => $this->num_of_days,
        ];
    }
}
