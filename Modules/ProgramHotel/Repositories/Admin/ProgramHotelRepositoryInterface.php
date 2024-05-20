<?php

namespace Modules\ProgramHotel\Repositories\Admin;

interface ProgramHotelRepositoryInterface
{
    public function getAll();

    public function getById($program);

    public function create(array $attributes);

    public function update($program, array $attributes);

    public function delete($program);
}
