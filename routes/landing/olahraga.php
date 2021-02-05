<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingMaintenanceController;

Route::get('/olahraga/catur', [LandingMaintenanceController::class, "index"])
	->name('landing.olahraga.catur.index');
Route::get('/olahraga/mlbb', [LandingMaintenanceController::class, "index"])
	->name('landing.olahraga.mlbb.index');
Route::get('/olahraga/pubg', [LandingMaintenanceController::class, "index"])
	->name('landing.olahraga.pubg.index');
Route::get('/olahraga/dota2', [LandingMaintenanceController::class, "index"])
	->name('landing.olahraga.dota2.index');