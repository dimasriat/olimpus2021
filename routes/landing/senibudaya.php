<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingMaintenanceController;

Route::get('/senibudaya/senirupa', [LandingMaintenanceController::class, "index"])
	->name('landing.senibudaya.senirupa.index');
Route::get('/senibudaya/senirupa/komikstrip', [LandingMaintenanceController::class, "index"])
	->name('landing.senibudaya.senirupa.komikstrip.index');
Route::get('/senibudaya/senirupa/senilukis', [LandingMaintenanceController::class, "index"])
	->name('landing.senibudaya.senirupa.senilukis.index');

Route::get('/senibudaya/senisastra', [LandingMaintenanceController::class, "index"])
	->name('landing.senibudaya.senisastra.index');
Route::get('/senibudaya/senisastra/ciptapuisi', [LandingMaintenanceController::class, "index"])
	->name('landing.senibudaya.senisastra.ciptapuisi.index');
Route::get('/senibudaya/senisastra/bacapuisi', [LandingMaintenanceController::class, "index"])
	->name('landing.senibudaya.senisastra.bacapuisi.index');
Route::get('/senibudaya/senisastra/ciptacerpen', [LandingMaintenanceController::class, "index"])
	->name('landing.senibudaya.senisastra.ciptacerpen.index');
Route::get('/senibudaya/senisastra/mhq', [LandingMaintenanceController::class, "index"])
	->name('landing.senibudaya.senisastra.mhq.index');
Route::get('/senibudaya/senisastra/mtq', [LandingMaintenanceController::class, "index"])
	->name('landing.senibudaya.senisastra.mtq.index');

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