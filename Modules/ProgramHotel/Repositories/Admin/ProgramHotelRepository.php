<?php

namespace Modules\ProgramHotel\Repositories\Admin;

use Modules\ProgramHotel\Entities\ProgramHotel;
use Modules\ProgramHotel\Transformers\Admin\ProgramHotelResource;

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

    public function create(array $attributes)
    {
        return new ProgramHotelResource(ProgramHotel::create($attributes));
    }

    public function update($program, array $attributes)
    {
        $program->update($attributes);
        return new ProgramHotelResource($program);
    }

    public function delete($program)
    {
        $program->delete();
    }
}
