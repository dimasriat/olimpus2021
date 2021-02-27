<?php

use App\Http\Controllers\DashboardEsportsPubgMobileController;
use App\Http\Controllers\LandingEsportsPubgMobileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingMaintenanceController;

Route::get('/olahraga/catur', [LandingMaintenanceController::class, "index"])
	->name('landing.olahraga.catur.index');

/**
 * ESPORTS
 * - PUBG MOBILE
 * - MLBB
 * - POINTBLANK
 * - DOTA2
 */
Route::get('/olahraga/esports', function () {
	$api = json_decode(file_get_contents(__DIR__ . "/../../resources/api/api.json"), true);
	return view('landing.olahraga.esports.index', ['api' => $api]);
})->name('landing.olahraga.esports.index');

/** PUBG MOBILE */
Route::get('/olahraga/esports/pubgmobile', [LandingEsportsPubgMobileController::class, "index"])
	->name('landing.olahraga.esports.pubgmobile.index');
Route::post('/olahraga/esports/pubgmobile', [LandingEsportsPubgMobileController::class, "store"])
	->name('landing.olahraga.esports.pubgmobile.store');
Route::get('/olahraga/esports/pubgmobile/success', [LandingEsportsPubgMobileController::class, "success"])
	->name('landing.olahraga.esports.pubgmobile.success');
Route::get('/dashboard/pendaftaran/esports/pubgmobile', [DashboardEsportsPubgMobileController::class, 'index'])
	->middleware(['auth'])->name('pendaftaran.esports.pubgmobile.index');
Route::put('/dashboard/pendaftaran/esports/pubgmobile', [DashboardEsportsPubgMobileController::class, 'update'])
	->middleware(['auth'])->name('pendaftaran.esports.pubgmobile.update');

Route::get('/olahraga/esports/mobilelegends', [LandingMaintenanceController::class, "index"])
	->name('landing.olahraga.esports.mobilelegends.index');
Route::get('/olahraga/esports/dota2', [LandingMaintenanceController::class, "index"])
	->name('landing.olahraga.esports.dota2.index');
Route::get('/olahraga/esports/pointblank', [LandingMaintenanceController::class, "index"])
	->name('landing.olahraga.esports.pointblank.index');
