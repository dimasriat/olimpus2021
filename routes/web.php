<?php

use App\Http\Controllers\UserController;

use Illuminate\Support\Facades\Route;

/**
 * TESTING 
 */
Route::get('/test', function(){
	if (env('APP_DEBUG')) {
		return "yoiii bro";
	} else {
		return redirect()->route('landing.index');
	}
});

/**
 * LANDING PAGE
 */
Route::get('/', function () {
	$api = json_decode(file_get_contents(__DIR__."/../resources/api/api.json"), true);
	return view('landing.index', ['api' => $api]);
})->name('landing.index');
Route::get('/olahraga', function () {
	$api = json_decode(file_get_contents(__DIR__."/../resources/api/api.json"), true);
	return view('landing.olahraga.index', ['api' => $api]);
})->name('landing.olahraga.index');
Route::get('/senibudaya', function () {
	$api = json_decode(file_get_contents(__DIR__."/../resources/api/api.json"), true);
	return view('landing.senibudaya.index', ['api' => $api]);
})->name('landing.senibudaya.index');
Route::get('/keilmiahan', function () {
	$api = json_decode(file_get_contents(__DIR__."/../resources/api/api.json"), true);
	return view('landing.keilmiahan.index', ['api' => $api]);
})->name('landing.keilmiahan.index');
Route::get('/apresiasi', function () {
	$api = json_decode(file_get_contents(__DIR__."/../resources/api/api.json"), true);
	return view('landing.apresiasi.index', ['api' => $api]);
})->name('landing.apresiasi.index');

/**
 * DASHBOARD
 */
Route::get('/dashboard', [UserController::class, 'index'])
	->middleware(['auth'])->name('dashboard.index');
Route::get('/dashboard/edit', [UserController::class, 'edit'])
	->middleware(['auth'])->name('dashboard.edit');
Route::put('/dashboard/edit', [UserController::class, 'update'])
	->middleware(['auth'])->name('dashboard.update');

Route::get('/dashboard/pendaftaran', function(){
	return view('dashboard.pendaftaran.index');
})->middleware(['auth'])->name('pendaftaran.index');

require __DIR__.'/landing/olahraga.php';
require __DIR__.'/landing/senibudaya.php';
require __DIR__.'/landing/keilmiahan.php';
require __DIR__.'/landing/apresiasi.php';
require __DIR__.'/auth.php';
