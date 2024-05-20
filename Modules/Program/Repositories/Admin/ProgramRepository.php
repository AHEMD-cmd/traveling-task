<?php

namespace Modules\Program\Repositories\Admin;

// use Modules\Program\Entities\Program;
use Modules\Program\Entities\Program;
use Modules\Program\Transformers\Admin\ProgramResource;

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

    public function create(array $attributes)
    {
        return new ProgramResource(Program::create($attributes));
    }

    public function update($program, array $attributes)
    {
        $program->update($attributes);
        return new ProgramResource($program);
    }

    public function delete($program)
    {
        $program->delete();
    }
}
