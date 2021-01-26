<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\LandingLktiController;
use App\Http\Controllers\DashboardLktiController;
use App\Http\Controllers\LandingEsaiController;
use App\Http\Controllers\DashboardEsaiController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
	$api = json_decode(file_get_contents(__DIR__."/../resources/api/api.json"), true);
	return view('landing.index', ['api' => $api]);
})->name('landing.index');
Route::get('/keilmiahan', function () {
	$api = json_decode(file_get_contents(__DIR__."/../resources/api/api.json"), true);
	return view('landing.keilmiahan.index', ['api' => $api]);
})->name('landing.keilmiahan.index');

Route::get('/dashboard', [UserController::class, 'index'])
	->middleware(['auth'])->name('dashboard.index');
Route::get('/dashboard/edit', [UserController::class, 'edit'])
	->middleware(['auth'])->name('dashboard.edit');
Route::put('/dashboard/edit', [UserController::class, 'update'])
	->middleware(['auth'])->name('dashboard.update');

Route::get('/dashboard/pendaftaran', function(){
	return view('dashboard.pendaftaran.index');
})->middleware(['auth'])->name('pendaftaran.index');


Route::get('/keilmiahan/lkti', [LandingLktiController::class, 'index'])
	->name('landing.keilmiahan.lkti.index');
Route::post('/keilmiahan/lkti', [LandingLktiController::class, 'store'])
	->name('landing.keilmiahan.lkti.store');
Route::get('/keilmiahan/lkti/success', [LandingLktiController::class, 'success'])
	->name('landing.keilmiahan.lkti.success');
Route::get('/dashboard/pendaftaran/lkti', [DashboardLktiController::class, 'index'])
	->middleware(['auth'])->name('pendaftaran.lkti.index');
Route::put('/dashboard/pendaftaran/lkti', [DashboardLktiController::class, 'update'])
	->middleware(['auth'])->name('pendaftaran.lkti.update');

// Route::get('/keilmiahan/esai', [LandingEsaiController::class, 'index'])
// 	->name('landing.keilmiahan.esai.index');
// Route::post('/keilmiahan/esai', [LandingEsaiController::class, 'store'])
// 	->name('landing.keilmiahan.esai.store');
// Route::get('/keilmiahan/esai/success', [LandingEsaiController::class, 'success'])
// 	->name('landing.keilmiahan.esai.success');
// Route::get('/dashboard/pendaftaran/esai', [LandingEsaiController::class, 'index'])
// 	->middleware(['auth'])->name('pendaftaran.esai.index');
// Route::put('/dashboard/pendaftaran/esai', [LandingEsaiController::class, 'update'])
// 	->middleware(['auth'])->name('pendaftaran.esai.update');

require __DIR__.'/auth.php';

/**
 *  "created_at" =>  date('Y-m-d H:i:s'),
 * 	"updated_at" => date('Y-m-d H:i:s'),
 */