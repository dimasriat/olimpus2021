<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingMaintenanceController;

Route::get('/apresiasi/dutakampus', [LandingMaintenanceController::class, "index"])
	->name('landing.apresiasi.dutakampus.index');
Route::get('/apresiasi/artech', [LandingMaintenanceController::class, "index"])
	->name('landing.apresiasi.artech.index');