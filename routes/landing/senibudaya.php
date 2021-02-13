<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingMaintenanceController;
use App\Http\Controllers\LandingSeniMusikSoloVocalController;
use App\Http\Controllers\DashboardSeniMusikSoloVocalController;

Route::get('/senibudaya/senirupa', function() {
	$api = json_decode(file_get_contents(__DIR__."/../../resources/api/api.json"), true);
	return view('landing.senibudaya.senirupa.index', ['api' => $api]);
})->name('landing.senibudaya.senirupa.index');
Route::get('/senibudaya/senirupa/komikstrip', [LandingMaintenanceController::class, "index"])
	->name('landing.senibudaya.senirupa.komikstrip.index');
Route::get('/senibudaya/senirupa/senilukis', [LandingMaintenanceController::class, "index"])
	->name('landing.senibudaya.senirupa.senilukis.index');

Route::get('/senibudaya/senisastra', function() {
	$api = json_decode(file_get_contents(__DIR__."/../../resources/api/api.json"), true);
	return view('landing.senibudaya.senisastra.index', ['api' => $api]);
})->name('landing.senibudaya.senisastra.index');
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

Route::get('/senibudaya/senitari', function() {
	$api = json_decode(file_get_contents(__DIR__."/../../resources/api/api.json"), true);
	return view('landing.senibudaya.senitari.index', ['api' => $api]);
})->name('landing.senibudaya.senitari.index');
Route::get('/senibudaya/senitari/taritradisional', [LandingMaintenanceController::class, "index"])
	->name('landing.senibudaya.senitari.taritradisional.index');
Route::get('/senibudaya/senitari/tarimodern', [LandingMaintenanceController::class, "index"])
	->name('landing.senibudaya.senitari.tarimodern.index');
	
Route::get('/senibudaya/senimusik', function() {
	$api = json_decode(file_get_contents(__DIR__."/../../resources/api/api.json"), true);
	return view('landing.senibudaya.senimusik.index', ['api' => $api]);
})->name('landing.senibudaya.senimusik.index');

Route::get('/senibudaya/senimusik/solovocal', [LandingSeniMusikSoloVocalController::class, "index"])
	->name('landing.senibudaya.senimusik.solovocal.index');
Route::post('/senibudaya/senimusik/solovocal', [LandingSeniMusikSoloVocalController::class, "store"])
	->name('landing.senibudaya.senimusik.solovocal.store');
Route::get('/senibudaya/senimusik/solovocal/success', [LandingSeniMusikSoloVocalController::class, "success"])
	->name('landing.senibudaya.senimusik.solovocal.success');
Route::get('/dashboard/pendaftaran/senimusik/solovocal', [DashboardSeniMusikSoloVocalController::class, 'index'])
	->middleware(['auth'])->name('pendaftaran.senimusik.solovocal.index');
Route::put('/dashboard/pendaftaran/senimusik/solovocal', [DashboardSeniMusikSoloVocalController::class, 'update'])
	->middleware(['auth'])->name('pendaftaran.senimusik.solovocal.update');

Route::get('/senibudaya/senimusik/musicgroup', [LandingMaintenanceController::class, "index"])
	->name('landing.senibudaya.senimusik.musicgroup.index');