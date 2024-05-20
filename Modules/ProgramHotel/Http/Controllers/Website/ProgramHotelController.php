<?php

namespace Modules\ProgramHotel\Http\Controllers\Website;

use Illuminate\Routing\Controller;
use Illuminate\Contracts\Support\Renderable;
use Modules\ProgramHotel\Entities\ProgramHotel;
use Modules\ProgramHotel\Repositories\Admin\ProgramHotelRepositoryInterface;

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
}
