<?php

use Illuminate\Support\Facades\Route;
use Modules\ProgramHotel\Http\Controllers\Website\ProgramHotelController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::apiResource('program-hotels', ProgramHotelController::class)->only(['index', 'show']);
