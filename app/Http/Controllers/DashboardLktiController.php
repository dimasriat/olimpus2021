<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardLktiController extends Controller
{
	public function index(Request $request) {
		$table_data_not_confirmed = DB::table('pendaftaran_lkti')
			->select('id', 'email', 'fakultas', 'nama_ketua', 'nim_jurusan_ketua', 'no_wa_ketua', 'foto_ketua', 'ktm_ketua')
			->where('konfirmasi', '=', false)
			->orderBy('fakultas', 'ASC')
			->get();
		$table_data_confirmed = DB::table('pendaftaran_lkti')
			->select('id', 'email', 'fakultas', 'nama_ketua', 'nim_jurusan_ketua', 'no_wa_ketua', 'foto_ketua', 'ktm_ketua')
			->where('konfirmasi', '=', true)
			->orderBy('fakultas', 'ASC')
			->get();
		return view('dashboard.pendaftaran.keilmiahan.lkti', [
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
		DB::table('pendaftaran_lkti')
			->where('id', '=', $row_id)
			->update(['konfirmasi' => $konfirmasi]);
		return redirect()->route('pendaftaran.lkti.index');
	}
}
