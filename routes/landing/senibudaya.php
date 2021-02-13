<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingMaintenanceController;

Route::get('/senibudaya/senirupa', [LandingMaintenanceController::class, "index"])
	->name('landing.senibudaya.senirupa.index');

Route::get('/senibudaya/senisastra', [LandingMaintenanceController::class, "index"])
	->name('landing.senibudaya.senisastra.index');

Route::get('/senibudaya/senitari', [LandingMaintenanceController::class, "index"])
	->name('landing.senibudaya.senitari.index');
Route::get('/senibudaya/senitari/taritradisional', [LandingMaintenanceController::class, "index"])
	->name('landing.senibudaya.senitari.taritradisional.index');
Route::get('/senibudaya/senitari/tarimodern', [LandingMaintenanceController::class, "index"])
	->name('landing.senibudaya.senitari.tarimodern.index');
	
Route::get('/senibudaya/senimusik', [LandingMaintenanceController::class, "index"])
	->name('landing.senibudaya.senimusik.index');
Route::get('/senibudaya/senimusik/solovocal', [LandingMaintenanceController::class, "index"])
	->name('landing.senibudaya.senimusik.solovocal.index');
Route::get('/senibudaya/senimusik/musicgroup', [LandingMaintenanceController::class, "index"])
	->name('landing.senibudaya.senimusik.musicgroup.index');