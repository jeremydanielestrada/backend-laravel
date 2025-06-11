<?php


use App\Http\Controllers\API\CarouselItemsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\ProfileController;



//Public API's
    Route::post('/login',           [AuthController::class, 'login'])->name('user.login');
    Route::post('/user',            [UserController::class, 'store'])->name('user.store');






//Private API's
 Route::middleware(['auth:sanctum'])->group(function () {
         Route::post('/logout',        [ AuthController::class, 'logout']);

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
        Route::put('/user/{id}',         'update')->name('user.update');
        Route::put('/user/email/{id}',   'email')->name('user.email');
        Route::put('/user/password/{id}','password')->name('user.password');
        Route::put('/user/image/{id}','image')->name('user.image');
        Route::delete('/user/{id}',      'destroy');
        });

    //User specific API's
        Route::get('/profile',  [ProfileController::class, 'show']);
        Route::put('/profile/image/',  [ProfileController::class, 'image'])->name('profile.image');
});


















