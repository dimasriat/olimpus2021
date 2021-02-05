<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingMaintenanceController;

use App\Http\Controllers\LandingLktiController;
use App\Http\Controllers\DashboardLktiController;
use App\Http\Controllers\LandingDebatController;
use App\Http\Controllers\DashboardDebatController;
use App\Http\Controllers\LandingEsaiController;
use App\Http\Controllers\DashboardEsaiController;

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

Route::get('/keilmiahan/debat', [LandingDebatController::class, 'index'])
	->name('landing.keilmiahan.debat.index');
Route::post('/keilmiahan/debat', [LandingDebatController::class, 'store'])
	->name('landing.keilmiahan.debat.store');
Route::get('/keilmiahan/debat/success', [LandingDebatController::class, 'success'])
	->name('landing.keilmiahan.debat.success');	
Route::get('/dashboard/pendaftaran/debat', [DashboardDebatController::class, 'index'])
	->middleware(['auth'])->name('pendaftaran.debat.index');
Route::put('/dashboard/pendaftaran/debat', [DashboardDebatController::class, 'update'])
	->middleware(['auth'])->name('pendaftaran.debat.update');

Route::get('/keilmiahan/esai', [LandingEsaiController::class, 'index'])
	->name('landing.keilmiahan.esai.index');
Route::post('/keilmiahan/esai', [LandingEsaiController::class, 'store'])
	->name('landing.keilmiahan.esai.store');
Route::get('/keilmiahan/esai/success', [LandingEsaiController::class, 'success'])
	->name('landing.keilmiahan.esai.success');	
Route::get('/dashboard/pendaftaran/esai', [DashboardEsaiController::class, 'index'])
	->middleware(['auth'])->name('pendaftaran.esai.index');
Route::put('/dashboard/pendaftaran/esai', [DashboardEsaiController::class, 'update'])
	->middleware(['auth'])->name('pendaftaran.esai.update');

Route::get('/keilmiahan/poster', [LandingMaintenanceController::class, "index"])
	->name('landing.keilmiahan.poster.index');
Route::get('/keilmiahan/speech', [LandingMaintenanceController::class, "index"])
	->name('landing.keilmiahan.speech.index');