<?php

namespace Modules\ProgramHotel\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Contracts\Support\Renderable;
use Modules\ProgramHotel\Entities\ProgramHotel;
use Modules\ProgramHotel\Http\Requests\Admin\ProgramHotelStoreRequest;
use Modules\ProgramHotel\Repositories\Admin\ProgramHotelRepositoryInterface;
use Modules\ProgramHotel\Http\Requests\Admin\ProgramHotelUpdateRequest;

class ProgramHotelController extends Controller
{
	protected $programRepository;

	public function __construct(ProgramHotelRepositoryInterface $programRepository)
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
	public function store(ProgramHotelStoreRequest $request)
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
	public function show(ProgramHotel $programHotel)
	{
        return response([
			'data' =>  $this->programRepository->getById($programHotel)
		], 200);
	}

	/**
	 * Update the specified resource in storage.
	 * @param Request $request
	 * @param int $id
	 * @return Renderable
	 */
	public function update(ProgramHotelUpdateRequest $request, ProgramHotel $programHotel)
	{
		return response([
			'data' => $this->programRepository->update($programHotel, $request->validated())
		], 200);
	}

	/**
	 * Remove the specified resource from storage.
	 * @param int $id
	 * @return Renderable
	 */
	public function destroy(ProgramHotel $programHotel)
	{
        $this->programRepository->delete($programHotel);

		return response([
			'message' => 'program hotel deleted successfully'
		], 204);
	}
}
