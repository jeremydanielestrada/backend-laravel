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
Route::put('/carousel/{id}',[CarouselItemsController::class, 'update']);
Route::delete('/carousel/{id}',[CarouselItemsController::class, 'destroy']);

//User Routes
Route::get('/user',[UserController::class, 'index']);
Route::get('/user/{id}',[UserController::class, 'show']);
Route::post('/user',[UserController::class, 'store'])->name('user.store');
Route::put('/user/{id}',[UserController::class, 'update'])->name('user.update');
Route::put('/user/email/{id}',[UserController::class, 'email'])->name('user.email');
Route::put('/user/password/{id}',[UserController::class, 'password'])->name('user.password');
Route::delete('/user/{id}',[UserController::class, 'destroy']);



