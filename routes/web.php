<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::group(['prefix' => ''], function () {
    Route::get('/', [HomeController::class, 'index']);
    Route::get('/about', [HomeController::class, 'about']);
    Route::get('/service', [HomeController::class, 'service']);
    Route::get('/menu', [HomeController::class, 'menu']);
    Route::get('/booking', [HomeController::class, 'booking']);
    Route::get('/team', [HomeController::class, 'team']);
    Route::get('/testimonial', [HomeController::class, 'testimonial']);
    Route::get('/contact', [HomeController::class, 'contact']);
});