<?php

use App\Http\Controllers\Datasheet\Control\ControlValveActuatorController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Datasheet\Control\ControlValveController;
use App\Http\Controllers\Datasheet\Control\ControlValveGeneralController;
use App\Http\Controllers\Datasheet\Control\ControlValveBodyAndValveTrimController;
use App\Http\Controllers\Datasheet\Control\ControlValveElementController;
use App\Http\Controllers\Datasheet\Control\ControlValvePneumaticController;
use App\Http\Controllers\Datasheet\Control\ControlValveProcessConditionController;
use App\Http\Controllers\Datasheet\Control\ControlValvePurchaseController;

Route::get('/', function () {
    return view('home');
});

// Route::resource('users', ControlValveGeneralController::class);

Route::prefix('/datasheets')->name('datasheets.')->group(function() {

    Route::prefix('/control-valve')->name('control.valve.')->group(function() {
        // Route Global Datasheet Control Valve
        Route::get('/control-valve', [ControlValveController::class, 'index']);
        // Route Full Datahseet Control Valve
        Route::get('/control-valve/datasheet/{id}', [ControlValveController::class, 'datasheet'])->name('control.valve.full');
        // Route Control Valve General
        Route::resource('/control-valve/generals', ControlValveGeneralController::class)->names('general');
        // Route Control Valve Process Condition
        Route::resource('/control-valve/process-condition', ControlValveProcessConditionController::class)->names('process.condition');
        // Route Control Valve Body And Valve Trim
        Route::resource('/control-valve/body-trim', ControlValveBodyAndValveTrimController::class)->names('body.trim');
        // Route Control Valve Pneumatic Controller
        Route::resource('/control-valve/pneumatic-controller', ControlValvePneumaticController::class)->names('pneumatic.controller');
        // Route Control Valve Actuator
        Route::resource('/control-valve/actuator', ControlValveActuatorController::class)->names('actuator');
        // Route Control Valve Element
        Route::resource('/control-valve/element', ControlValveElementController::class)->names('element');
        // Route Control Valve Purchase
        Route::resource('/control-valve/purchase', ControlValvePurchaseController::class)->names('purchase');
    });

});

// Routes Login
Auth::routes([
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
    'confirm' => false
]);


