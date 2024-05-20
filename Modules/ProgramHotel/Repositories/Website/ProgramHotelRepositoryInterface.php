<?php

namespace Modules\ProgramHotel\Repositories\Website;

interface ProgramHotelRepositoryInterface
{
    public function getAll();

    public function getById($program);
}
