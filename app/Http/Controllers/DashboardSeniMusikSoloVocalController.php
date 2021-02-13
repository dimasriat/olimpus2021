<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardSeniMusikSoloVocalController extends Controller
{
	public function index(Request $request) {
		$table_data_not_confirmed = DB::table('pendaftaran_senimusik_solovocal')
			->where('konfirmasi', '=', false)
			->orderBy('fakultas', 'ASC')
			->get();
		$table_data_confirmed = DB::table('pendaftaran_senimusik_solovocal')
			->where('konfirmasi', '=', true)
			->orderBy('fakultas', 'ASC')
			->get();
		return view('dashboard.pendaftaran.senibudaya.senimusik.solovocal', [
			'table_data_not_confirmed' => $table_data_not_confirmed,
			'table_data_confirmed' => $table_data_confirmed,
		]);
	}
	public function update(Request $request) {
		$konfirmasi = true;
		if ($request->input('set_value') == "0") {
			$konfirmasi = false;
		}
		$row_id = intval($request->input('row_id'));
		DB::table('pendaftaran_senimusik_solovocal')
			->where('id', '=', $row_id)
			->update(['konfirmasi' => $konfirmasi]);
		return redirect()->route('pendaftaran.senimusik.solovocal.index');
	}
}
