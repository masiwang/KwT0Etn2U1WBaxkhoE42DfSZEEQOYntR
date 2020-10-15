<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ErrorController;
use App\Http\Controllers\GettingStartedController;

Route::get( 'login', [AuthController::class, 'login'])->name('login'); //done
Route::post('login', [AuthController::class, 'login_do']);

Route::get( '/register', [AuthController::class, 'register']);
Route::post('/register', [AuthController::class, 'register_do']);
Route::get( '/getting-started', [GettingStartedController::class, 'getting_started']);
Route::post('/getting-started', [GettingStartedController::class, 'getting_started_save']);

Route::get('/404', [ErrorController::class, 'not_found']);

Route::post('profile/send-email-verification', [AuthController::class, 'email_verification_send']);
Route::post('profile/verify-my-email', [AuthController::class, 'email_verification_do']);

use App\Http\Controllers\Basecamp\DashboardController;
use App\Http\Controllers\Basecamp\Fund\IndexController as FundIndex;
use App\Http\Controllers\Basecamp\Fund\ProductController as FundProduct;
use App\Http\Controllers\Basecamp\Fund\PaymentController as FundPayment;
use App\Http\Controllers\Basecamp\Market\IndexController as MarketIndex;
use App\Http\Controllers\Basecamp\Market\ProductController as MarketProduct;
use App\Http\Controllers\Basecamp\Market\PaymentController as MarketPayment;

Route::group(['prefix' => 'basecamp', 'middleware' => ['auth', 'admin']], function () {
    Route::get( '/', [DashboardController::class, 'index']);
    Route::get( '/fund', [FundIndex::class, 'index']);
    Route::get( '/fund/product', [FundProduct::class, 'index']);
    Route::get( '/fund/product/new', [FundProduct::class, 'new']);
    Route::post('/fund/product/new', [FundProduct::class, 'new_save']);
    Route::get( '/fund/product/{slug}/edit', [FundProduct::class, 'edit']);
    Route::post('/fund/product/{slug}/edit', [FundProduct::class, 'edit_save']);
    Route::post('/fund/product/{slug}/edit_image', [FundProduct::class, 'edit_image_save']);
    Route::get( '/fund/product/{slug}', [FundProduct::class, 'detail']);
    Route::get( '/fund/payment', [FundPayment::class, 'index']);
    Route::get( '/fund/payment/{invoice}', [FundPayment::class, 'detail']);
    Route::post('/fund/payment/{invoice}', [FundPayment::class, 'confirm']);

    Route::get( '/market', [MarketIndex::class, 'index']);
    Route::get( '/market/product', [MarketProduct::class, 'index']);
    Route::get( '/market/product/new', [MarketProduct::class, 'new']);
    Route::post('/market/product/new', [MarketProduct::class, 'new_save']);
    Route::get( '/market/product/{slug}/edit', [MarketProduct::class, 'edit']);
    Route::post('/market/product/{slug}/edit', [MarketProduct::class, 'edit_save']);
    Route::post('/market/product/{slug}/edit_image', [MarketProduct::class, 'edit_image_save']);
    Route::get( '/market/product/{slug}', [MarketProduct::class, 'detail']);
    Route::get( '/market/payment', [MarketPayment::class, 'index']);
    Route::get( '/market/payment/{invoice}', [MarketPayment::class, 'detail']);
    Route::post('/market/payment/{invoice}', [MarketPayment::class, 'confirm']);
});

/**
 * Client area
 */
use App\Http\Controllers\Client\HomeController as ClientHome;
use App\Http\Controllers\Client\Profile\IndexController as ClientProfileIndex;
use App\Http\Controllers\Client\Profile\AddressController as ClientProfileAddress;
use App\Http\Controllers\Client\Profile\SecurityController as ClientProfileSecurity;
use App\Http\Controllers\Client\Profile\FundController as ClientProfileFund;
use App\Http\Controllers\Client\Profile\MarketController as ClientProfileMarket;
use App\Http\Controllers\Client\Profile\WishlistController as ClientProfileWishlist;
use App\Http\Controllers\Api\WishlistController as Wishlist;

// ! Client homepage
Route::get( '/', function(){
    return view((Auth::id() ? 'client.index' : 'client.landing'), ['user' => Auth::user()]);
});

// ! Produk pendanaan
use App\Http\Controllers\Client\Fund\ProductController as ClientFundProduct;
Route::group(['middleware' => ['auth', 'profileiscomplete']], function () {
    Route::get( '/fund', [ClientFundProduct::class, 'index']);
    Route::get( '/fund/{category}', [ClientFundProduct::class, 'category']);
    Route::get( '/fund/{category}/{product}', [ClientFundProduct::class, 'detail']);
    Route::post('/fund/{category}/{product}/buy', [ClientFundProduct::class, 'buy']);
    // api
    Route::get('/v1/fund', [ClientFundProduct::class, '_get']);
});

// ! Produk market
use App\Http\Controllers\Client\Market\ProductController as ClientMarketProduct;
use App\Http\Controllers\Client\MarketProductController as ClientMarket;
Route::get('/v1/market/guest', [ClientMarket::class, '_get_for_non_auth_user']);
Route::group(['middleware' => ['auth', 'profileiscomplete']], function () {
    Route::get( '/market', [ClientMarketProduct::class, 'index']);
    Route::get( '/market/{category}', [ClientMarketProduct::class, 'category']);
    Route::get( '/market/{category}/{product}', [ClientMarketProduct::class, 'detail']);
    Route::post('/market/{category}/{product}/buy', [ClientMarketProduct::class, 'buy']);
    // api
    Route::get('/v1/market', [ClientMarket::class, '_get']);
});

// ! Wishlist
use App\Http\Controllers\Client\WishlistController as ClientWishlist;
Route::group(['middleware' => ['auth', 'profileiscomplete']], function () {
    Route::get('wishlist', [ClientWishlist::class, 'index']);
    // api
    Route::get('/v1/wishlist', [ClientWishlist::class, '_get']);
});

// ! Checkout
use App\Http\Controllers\Client\CheckoutController as ClientCheckout;
Route::group(['middleware' => ['auth', 'profileiscomplete']], function () {
    Route::get('checkout', [ClientCheckout::class, 'index']);
    Route::get('checkout/{invoice}', [ClientCheckout::class, 'detail']);
    Route::get('checkout/{invoice}/pay', [ClientCheckout::class, 'pay']);
    Route::post('checkout/{invoice}/pay', [ClientCheckout::class, 'pay_save']);
    // api
    Route::get('/v1/checkout', [ClientCheckout::class, '_get']);
    Route::get('/v1/checkout/{invoice}', [ClientCheckout::class, '_detail']);
});

// ! Portofolio
use App\Http\Controllers\Client\PortofolioController as ClientPortofolio;
Route::group(['middleware' => ['auth', 'profileiscomplete']], function () {
    Route::get( 'portofolio', [ClientPortofolio::class, 'index']);
    Route::get( 'portofolio/{invoice}', [ClientPortofolio::class, 'detail']);
    Route::get( 'portofolio/{invoice}/pay', [ClientPortofolio::class, 'pay']);
    Route::post('portofolio/{invoice}/pay', [ClientPortofolio::class, 'pay_save']);
    // api
    Route::get('v1/portofolio', [ClientPortofolio::class, '_get']);
    Route::get('v1/portofolio/{invoice}', [ClientPortofolio::class, '_detail']);
});

// ! Notification
use App\Http\Controllers\Client\NotificationController as ClientNotification;
Route::group(['middleware' => ['auth', 'profileiscomplete']], function(){
    Route::get('/notification', [ClientNotification::class, 'index']);
    // API
    Route::get('/v1/notification', [ClientNotification::class, '_get']);
    Route::get('/v1/notification/{id}', [ClientNotification::class, '_detail']);
});

// ! User profile
use App\Http\Controllers\Client\ProfileController;
Route::group(['middleware' => ['auth', 'profileiscomplete']], function () {
    // api
    Route::get('/v1/user', [ProfileController::class, '_get']);
});


Route::group(['middleware' => ['auth', 'profileiscomplete']], function () {
    Route::get( '/profile', [ClientProfileIndex::class, 'profile']);
    Route::post('/profile', [ClientProfileIndex::class, 'profile_save']);
    Route::get( '/profile/address', [ClientProfileAddress::class, 'address']);
    Route::get( '/profile/security', [ClientProfileSecurity::class, 'security']);
    Route::get( '/profile/fund', [ClientProfileFund::class, 'index']);
    Route::get( '/profile/fund/invoice/{invoice}', [ClientProfileFund::class, 'invoice']);
    Route::get( '/profile/fund/invoice/{invoice}/pay', [ClientProfileFund::class, 'pay']);
    Route::post('/profile/fund/invoice/{invoice}/pay', [ClientProfileFund::class, 'pay_save']);

    Route::get( '/profile/market', [ClientProfileMarket::class, 'index']);
    Route::get( '/profile/market/invoice/{invoice}', [ClientProfileMarket::class, 'invoice']);
    Route::get( '/profile/market/invoice/{invoice}/pay', [ClientProfileMarket::class, 'pay']);
    Route::post('/profile/market/invoice/{invoice}/pay', [ClientProfileMarket::class, 'pay_save']);
    // API DIMULAI DISINI
    Route::post('/market/wishlist/new', [Wishlist::class, 'new']);
});

// ! Logout
Route::get('/logout', function(){
    Auth::logout();
    Session::flush();
})->middleware('auth');