<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LandingLktiController extends Controller
{
	public function index() {
		$api = json_decode(file_get_contents(__DIR__ . "/../../../resources/api/api.json"), true);
		return view('landing.keilmiahan.lkti', ['api' => $api]);
	}

	public function store(Request $request) {
		$request->validate([
			"email" => "required",
			"fakultas" => "required",
			"nama_ketua" => "required",
			"no_wa_ketua" => "required",
			"nim_jurusan_ketua" => "required",
			"nama_pembimbing" => "required",
		]);
		DB::table('pendaftaran_lkti')
			->insert([
				'email' => $request->input('email'),
				'fakultas' => $request->input('fakultas'),
				'no_wa_ketua' => $request->input('no_wa_ketua'),
				'nama_ketua' => $request->input('nama_ketua'),
				'nim_jurusan_ketua' => $request->input('nim_jurusan_ketua'),
				'nama_anggota_1' => $request->input('nama_anggota_1'),
				'nim_jurusan_anggota_1' => $request->input('nim_jurusan_anggota_1'),
				'nama_anggota_2' => $request->input('nama_anggota_2'),
				'nim_jurusan_anggota_2' => $request->input('nim_jurusan_anggota_2'),
				'nama_pembimbing' => $request->input('nama_pembimbing'),
			]);
		return redirect()->route('landing.keilmiahan.lkti.success')->with('status', 'SUKSES!');
	}

	public function success() {
		if (session('status')) {
			$api = json_decode(file_get_contents(__DIR__ . "/../../../resources/api/api.json"), true);
			return view('landing.success', ['api' => $api]);
		} else {
			return redirect()->route('landing.keilmiahan.lkti.index');
		}
	}
}
