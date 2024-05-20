<?php

namespace Modules\Program\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Contracts\Support\Renderable;
use Modules\Program\Entities\Program;
use Modules\Program\Http\Requests\Admin\ProgramStoreRequest;
use Modules\Program\Http\Requests\Admin\ProgramUpdateRequest;
use Modules\Program\Repositories\Admin\ProgramRepositoryInterface;

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
	 * Store a newly created resource in storage.
	 * @param Request $request
	 * @return Renderable
	 */
	public function store(ProgramStoreRequest $request)
	{
		return response([
			'data' => $this->programRepository->create($request->validated())
		], 201);
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

	/**
	 * Update the specified resource in storage.
	 * @param Request $request
	 * @param int $id
	 * @return Renderable
	 */
	public function update(ProgramUpdateRequest $request, Program $program)
	{
		return response([
			'data' => $this->programRepository->update($program, $request->validated())
		], 200);
	}

	/**
	 * Remove the specified resource from storage.
	 * @param int $id
	 * @return Renderable
	 */
	public function destroy(Program $program)
	{
        $this->programRepository->delete($program);

		return response([
			'message' => 'program deleted successfully'
		], 204);
	}
}
