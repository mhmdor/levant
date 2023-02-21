<?php

use App\Http\Controllers\Api\auth\CustomerController;
use App\Http\Controllers\Api\brands\BrandController;
use App\Http\Controllers\Api\cars\CarController;
use App\Http\Controllers\Api\customer\CustomerProfile;
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

//auth costomer
Route::post('customer/register', [CustomerController::class, "register"]);
Route::post('customer/login', [CustomerController::class, "login"]);


//cars 
Route::get('cars',[CarController::class,'getAllCars']);
Route::get('cars/{id}',[CarController::class,'getCarById']);
Route::get('cars/brand/{id}',[CarController::class,'getCarsByBrand']);


Route::get('brands',[BrandController::class,'index']);

Route::group(['middleware' => 'auth:customer'], function () {
    Route::post('customer/logout', [CustomerController::class, "logout"]);


    Route::post('customer/book-car/{car_id}',[CarController::class,"bookCar"]);


    Route::post('customer/review-car/{car_id}',[CarController::class,"carReview"]);


    Route::get('customer/get-book-car',[CarController::class,'getBookCar']);


    Route::get('customer/get-profile',[CustomerProfile::class,'getProfile']);

});




// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
