<?php

namespace Modules\ProgramHotel\Repositories\Website;

use Modules\ProgramHotel\Entities\ProgramHotel;
use Modules\ProgramHotel\Transformers\Website\ProgramHotelResource;

class ProgramHotelRepository implements ProgramHotelRepositoryInterface
{
    public function getAll()
    {
        return ProgramHotelResource::collection(ProgramHotel::paginate(10));
    }

    public function getById($program)
    {
        return new ProgramHotelResource($program);
    }
}
