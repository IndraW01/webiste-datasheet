<?php

use App\Http\Controllers\Datasheet\ControlValveGeneralController;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home');
});

// Route::resource('users', ControlValveGeneralController::class);

Route::prefix('/datasheets')->name('datasheets.')->group(function() {
    Route::resource('/control-valve', ControlValveGeneralController::class)->names('control.valve')->parameters(['control-valve' => 'controlValveGeneral']);
});

Auth::routes([
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
    'confirm' => false
]);


