<?php


use App\Http\Controllers\API\CarouselItemsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\UserController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


//Carousel Items Routes
Route::get('/carousel',[CarouselItemsController::class, 'index']);
Route::get('/carousel/{id}',[CarouselItemsController::class, 'show']);
Route::post('/carousel',[CarouselItemsController::class, 'store']);
Route::delete('/carousel/{id}',[CarouselItemsController::class, 'destroy']);

//User Routes
Route::get('/user',[UserController::class, 'index']);
Route::delete('/user/{id}',[UserController::class, 'destroy']);


