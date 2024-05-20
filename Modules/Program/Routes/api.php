<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::middleware('auth:api')->get('/program', function (Request $request) {
//     return $request->user();
// });

Route::prefix('admin')
	 ->group(function () {

        require 'custom/admin.php';
});

Route::prefix('website')
	 ->group(function () {

        require 'custom/website.php';
});

