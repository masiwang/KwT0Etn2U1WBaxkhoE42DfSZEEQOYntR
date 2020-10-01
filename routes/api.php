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
/**
 * Client area
 */
use App\Http\Controllers\Client\Market\ProductController as ClientMarketProduct;
Route::group(['middleware' => ['api']], function () {
    Route::post('/market/wishlist/new', [ClientMarketProduct::class, '_like']);
});