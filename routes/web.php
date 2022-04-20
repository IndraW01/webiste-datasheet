<?php

use App\Http\Controllers\ControlValveBodyAndValveTrimController;
use App\Http\Controllers\Datasheet\ControlValveController;
use App\Http\Controllers\Datasheet\ControlValveGeneralController;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home');
});

// Route::resource('users', ControlValveGeneralController::class);

Route::prefix('/datasheets')->name('datasheets.')->group(function() {
    // Route Global Datasheet Control Valve
    Route::get('/control-valve', [ControlValveController::class, 'index'])->name('control.valve');

    // Route Control Valve General
    Route::resource('/control-valve/generals', ControlValveGeneralController::class)->names('control.valve.general');
    // Route Control Valve Body And Valve Trim
    Route::resource('/control-valve/body-trim', ControlValveBodyAndValveTrimController::class)->names('control.valve.body.trim');
});

// Routes Login
Auth::routes([
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
    'confirm' => false
]);


