<?php


use App\Http\Controllers\API\CarouselItemsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\AuthController;



//Authentication  routes

Route::controller(AuthController::class)->group(function () {
    Route::post('/login', 'login')->name('user.login');
    Route::post('/logout', 'logout');
});





Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::controller(CarouselItemsController::class)->group(function () {
    Route::get('/carousel', 'index');
    Route::get('/carousel/{id}','show');
    Route::put('/carousel/{id}', 'update');
    Route::delete('/carousel/{id}','destroy');
});




//Carousel Items Routes



//User Routes
// Route::get('/user',[UserController::class, 'index']);
// Route::get('/user/{id}',[UserController::class, 'show']);
Route::post('/user',[UserController::class, 'store'])->name('user.store');
// Route::put('/user/{id}',[UserController::class, 'update'])->name('user.update');
// Route::put('/user/email/{id}',[UserController::class, 'email'])->name('user.email');
// Route::put('/user/password/{id}',[UserController::class, 'password'])->name('user.password');
// Route::delete('/user/{id}',[UserController::class, 'destroy']);





