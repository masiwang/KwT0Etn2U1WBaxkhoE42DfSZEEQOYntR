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
use App\Http\Controllers\Api\KodeposController as Kodepos;
use App\Http\Controllers\Api\MarketProductController as MarketProduct;
use App\Http\Controllers\Api\WishlistController as Wishlist;
 
Route::group(['middleware' => ['api']], function () {
    Route::get('/provinsi', [Kodepos::class, 'get_provinsis']);
    Route::get('/kabupaten', [Kodepos::class, 'get_kabupatens']);
    Route::get('/kecamatan', [Kodepos::class, 'get_kecamatans']);
    Route::get('/kelurahan', [Kodepos::class, 'get_kelurahans']);
    Route::get('/kodepos', [Kodepos::class, 'get_kodepos']);

    Route::get('/market/product/{page}', [MarketProduct::class, 'get']);
    Route::get('/wishlist/{page}', [Wishlist::class, 'get']);
});