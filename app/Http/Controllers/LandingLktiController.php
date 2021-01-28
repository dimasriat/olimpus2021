<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LandingLktiController extends Controller
{
	public $cabang_lomba = 'LKTI';
	public $whatsapp = 'https://api.whatsapp.com/send?phone=6281578382326';
	public $pamflet = 'img/keilmiahan/lkti/pamflet.jpeg';
	public $guidebook = 'http://bit.ly/GuidebookLKTIOlimpus2021';
	public $nominal = 'Rp35.000,00';

	public function index() {
		$api = json_decode(file_get_contents(__DIR__ . "/../../../resources/api/api.json"), true);
		return view('landing.keilmiahan.lkti', [
			'api' => $api,
			'whatsapp' => $this->whatsapp,
			'cabang_lomba' => $this->cabang_lomba,
			'pamflet' => $this->pamflet,
			'guidebook' => $this->guidebook,
		]);
	}

	public function store(Request $request) {
		$request->validate([
			"email" => "required",
			"fakultas" => "required",
			"nama_ketua" => "required",
			"no_wa_ketua" => "required",
			"nim_jurusan_ketua" => "required",
			"foto_ketua" => "required",
			"ktm_ketua" => "required",
		]);
		

		// LOKASI PENYIMPANAN: img/pendaftar/keilmiahan/lkti/
		$ktm_ketua = $request->file('ktm_ketua'); 			// 7_KTM_KETUA_Dimas_Riatmodjo.jpg
		$ktm_anggota_1 = $request->file('ktm_anggota_1');	// 7_KTM_ANGGOTA_1_Dimas_Riatmodjo.jpg
		$ktm_anggota_2 = $request->file('ktm_anggota_2');	// 7_KTM_ANGGOTA_2_Dimas_Riatmodjo.jpg

		$foto_ketua = $request->file('foto_ketua');			// 7_FOTO_KETUA_Dimas_Riatmodjo.jpg
		$foto_anggota_1 = $request->file('foto_anggota_1');	// 7_FOTO_ANGGOTA_1_Dimas_Riatmodjo.jpg
		$foto_anggota_2 = $request->file('foto_anggota_2');	// 7_FOTO_ANGGOTA_2_Dimas_Riatmodjo.jpg


		/**
		 * Menambahkan data input text ke database biar dapet row_id nya biar bisa
		 * membari nama file yang diupload sesuai rownya
		 */
		$row_id = DB::table('pendaftaran_lkti')
			->insertGetId([
				'email' => $request->input('email'),
				'fakultas' => $request->input('fakultas'),
				'no_wa_ketua' => $request->input('no_wa_ketua'),
				'nama_ketua' => $request->input('nama_ketua'),
				'nim_jurusan_ketua' => $request->input('nim_jurusan_ketua'),
				'nama_anggota_1' => $request->input('nama_anggota_1'),
				'nim_jurusan_anggota_1' => $request->input('nim_jurusan_anggota_1'),
				'nama_anggota_2' => $request->input('nama_anggota_2'),
				'nim_jurusan_anggota_2' => $request->input('nim_jurusan_anggota_2'),
			]);
		
		/**
		 * row_id udah dapet sekarang tinggal mindahin filenya ke folder public yang udah dibikin
		 * dan akhirnya tinggal mengupdate isi tabelnya sesuai row_id yang udah didapat tadi
		 * dengan lokasi filenya ktm dan foto dari ketua, anggota_1, dan anggota_2
		 * 
		 * perintah store itu berguna untuk memindahkan file sekaligus mereturn lokasi dari file
		 */
		$nama_file = [
			'ktm' => [
				'ketua' => $ktm_ketua ? $ktm_ketua->store('keilmiahan/lkti/' . $row_id, ["disk" => 'pendaftaran']) : "",
				'anggota_1' => $ktm_anggota_1 ? $ktm_anggota_1->store('keilmiahan/lkti/' . $row_id, ["disk" => 'pendaftaran']) : "",
				'anggota_2' => $ktm_anggota_2 ? $ktm_anggota_2->store('keilmiahan/lkti/' . $row_id, ["disk" => 'pendaftaran']) : "",
			],
			'foto' => [
				'ketua' => $foto_ketua ? $foto_ketua->store('keilmiahan/lkti/' . $row_id, ["disk" => 'pendaftaran']) : "",
				'anggota_1' => $foto_anggota_1 ? $foto_anggota_1->store('keilmiahan/lkti/' . $row_id, ["disk" => 'pendaftaran']) : "",
				'anggota_2' => $foto_anggota_2 ? $foto_anggota_2->store('keilmiahan/lkti/' . $row_id, ["disk" => 'pendaftaran']) : "",
			],
		];

		/**
		 * file sudah dipindahkan dan tiap-tiap file juga udah tercatat lokasi-lokasinya di array $nama_file
		 * sekarang tinggain di update isi tabelnya
		 */
		DB::table('pendaftaran_lkti')
			->where('id', '=', $row_id)
			->update([
				'ktm_ketua' => $nama_file['ktm']['ketua'],
				'ktm_anggota_1' => $nama_file['ktm']['anggota_1'],
				'ktm_anggota_2' => $nama_file['ktm']['anggota_2'],
				'foto_ketua' => $nama_file['foto']['ketua'],
				'foto_anggota_1' => $nama_file['foto']['anggota_1'],
				'foto_anggota_2' => $nama_file['foto']['anggota_2'],
			]);

		return redirect()->route('landing.keilmiahan.lkti.success')->with('status', 'SUKSES!');
	}

	public function success() {
		if (session('status')) {
			$api = json_decode(file_get_contents(__DIR__ . "/../../../resources/api/api.json"), true);
			return view('landing.success', [
				'api' => $api,
				'whatsapp' => $this->whatsapp,
				'cabang_lomba' => $this->cabang_lomba,
				'nominal' =>$this->nominal,
			]);
		} else {
			return redirect()->route('landing.keilmiahan.lkti.index');
		}
	}
}
