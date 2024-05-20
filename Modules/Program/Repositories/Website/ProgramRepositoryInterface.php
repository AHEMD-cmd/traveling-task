<?php

namespace Modules\Program\Repositories\Website;

interface ProgramRepositoryInterface
{
    public function getAll();

    public function getById($program);
}
