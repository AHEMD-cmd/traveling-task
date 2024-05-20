<?php

namespace Modules\Program\Transformers\Website;

use Illuminate\Http\Resources\Json\JsonResource;
use Modules\ProgramHotel\Transformers\Website\ProgramHotelResource;

class ProgramResource extends JsonResource
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
            'title' => $this->title,
            'level' => $this->level,
            'program_type' => $this->program_type,
            'description' => $this->description,
            'program_hotels' => ProgramHotelResource::collection($this->whenLoaded('programHotels')),
        ];
    }
}
