<?php


use App\Http\Controllers\API\CarouselItemsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\AuthController;



//Authentication  routes
Route::controller(AuthController::class)->group(function () {
    Route::post('/login', 'login')->name('user.login');
});



Route::middleware(['auth:sanctum'])->group(function () {

    Route::post('/logout',[ AuthController::class, 'logout']);

                //Carousel Items Routes
 Route::controller(CarouselItemsController::class)->group(function () {
        Route::get('/carousel',        'index');
        Route::get('/carousel/{id}',   'show');
        Route::put('/carousel/{id}',   'update');
        Route::delete('/carousel/{id}','destroy');
    });


    //User Routes
    Route::controller(UserController::class)->group(function () {
        Route::get('/user',              'index');
        Route::get('/user/{id}',         'show');
        Route::post('/user',             'store')->name('user.store');
        Route::put('/user/{id}',         'update')->name('user.update');
        Route::put('/user/email/{id}',   'email')->name('user.email');
        Route::put('/user/password/{id}','password')->name('user.password');
        Route::delete('/user/{id}',      'destroy');
        });

});

















