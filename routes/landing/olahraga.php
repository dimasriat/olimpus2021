<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingMaintenanceController;

Route::get('/olahraga/catur', [LandingMaintenanceController::class, "index"])
	->name('landing.olahraga.catur.index');

Route::get('/olahraga/esports', function () {
	$api = json_decode(file_get_contents(__DIR__ . "/../../resources/api/api.json"), true);
	return view('landing.olahraga.esports.index', ['api' => $api]);
})->name('landing.olahraga.esports.index');


Route::get('/olahraga/esports/mobilelegends', [LandingMaintenanceController::class, "index"])
	->name('landing.olahraga.esports.mobilelegends.index');
Route::get('/olahraga/esports/pubgmobile', [LandingMaintenanceController::class, "index"])
	->name('landing.olahraga.esports.pubgmobile.index');
Route::get('/olahraga/esports/dota2', [LandingMaintenanceController::class, "index"])
	->name('landing.olahraga.esports.dota2.index');
Route::get('/olahraga/esports/pointblank', [LandingMaintenanceController::class, "index"])
	->name('landing.olahraga.esports.pointblank.index');
