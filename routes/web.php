<?php

use App\Http\Controllers\Datasheet\ControlValveController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home');
});

Route::prefix('/datasheets')->name('datasheets.')->group(function() {
    Route::resource('/control-valve', ControlValveController::class)->names('control.valve');
});

Auth::routes([
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
    'confirm' => false
]);


