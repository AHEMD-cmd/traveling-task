<?php

namespace Modules\Program\Repositories\Website;

use Modules\Program\Entities\Program;
use Modules\Program\Transformers\Website\ProgramResource;

class ProgramRepository implements ProgramRepositoryInterface
{
    public function getAll()
    {
        return ProgramResource::collection(Program::paginate(10));
    }

    public function getById($program)
    {
        return new ProgramResource($program);
    }
}
