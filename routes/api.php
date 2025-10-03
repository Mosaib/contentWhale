<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestimonialController;

Route::get('/', function () {
    return response()->json(['version' => 'content whale api v1.0']);
});

Route::get('/testimonials', [TestimonialController::class, 'index']);
