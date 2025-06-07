<?php


use App\Http\Controllers\API\CarouselItemsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');



Route::get('/carousel',[CarouselItemsController::class, 'index']);
Route::get('/carousel/{id}',[CarouselItemsController::class, 'show']);
Route::post('/carousel',[CarouselItemsController::class, 'store']);
Route::delete('/carousel/{id}',[CarouselItemsController::class, 'destroy']);


