<?php

namespace Modules\Program\Http\Controllers\Website;

use Illuminate\Routing\Controller;
use Modules\Program\Entities\Program;
use Illuminate\Contracts\Support\Renderable;
use Modules\Program\Repositories\Website\ProgramRepositoryInterface;

class ProgramController extends Controller
{
	protected $programRepository;

	public function __construct(ProgramRepositoryInterface $programRepository)
	{
		$this->programRepository = $programRepository;
	}

	public function index()
	{
		return response([
			'data' => $this->programRepository->getAll()
		], 200);
	}

	/**
	 * Show the specified resource.
	 * @param int $id
	 * @return Renderable
	 */
	public function show(Program $program)
	{
        $program->load('programHotels');
        return response([
			'data' =>  $this->programRepository->getById($program)
		], 200);
	}
}
