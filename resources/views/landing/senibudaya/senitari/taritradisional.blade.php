@extends("layouts.landing")

@section("content")
<x-container class="py-5">
	<div class="h1 text-center font-weight-bold py-5">{{ $cabang_lomba }}</div>
	<div class="row">
		<div class="col-12 my-3">
			<img src="{{ asset($pamflet) }}" class="img-fluid w-100 shadow"/>
		</div>
		<div class="col col-lg my-3">
			<a href="{{ asset($pamflet) }}" class="btn btn-primary w-100"  download>Download Pamflet</a>
		</div>
		<div class="col col-lg my-3">
			<a href="{{ $guidebook }}" class="btn btn-danger w-100">Download Guide Book</a>
		</div>
		<div class="col-12 col-lg my-3">
			<a href="{{ $whatsapp }}" class="btn btn-success w-100">Hubungi Contact Person {{ $cabang_lomba }} (Whatsapp)</a>
		</div>
	</div>
</x-container>
<x-container class="py-5" style="min-height: 480px; background-image: url('{{ asset('img/bg-2.jpg') }}'); background-size: cover; background-attachment: fixed; background-position: center;" >
	<div class="h1 text-center font-weight-bold py-5 text-white">Daftar {{ $cabang_lomba }}</div>
	<div class="row">
		@if ($errors->any())
		<div class="col-12 col-lg my-3">
			<div class="card shadow h-100">
				<div class="card-body">
					@foreach($errors->all() as $error)
					<p class="text-danger font-weight-bold">{{ $error }}</p>
					@endforeach
				</div>
			</div>
		</div>
		@endif
		<div class="w-100"></div>
		<div class="col-12 col-lg my-3">
			<div class="card shadow h-100">
				<div class="card-body">
					<form method="POST" action="{{ route('landing.senibudaya.senitari.taritradisional.store') }}" enctype="multipart/form-data">
						@csrf
						<x-form-daftar type="text" name="fakultas" required>
							Fakultas (required):
						</x-form-daftar>
						<x-form-daftar type="text" name="judul_karya" required>
							Judul Karya (required):
						</x-form-daftar>
						<x-form-daftar type="text" name="nama_ketua" required>
							Nama Ketua (required):
						</x-form-daftar>
						<x-form-daftar type="text" name="nim_ketua" required>
							NIM Ketua (required):
						</x-form-daftar>
						<x-form-daftar type="text" name="ttl_ketua" required>
							Tempat, Tanggal Lahir Ketua (required)
						</x-form-daftar>
						<x-form-daftar type="text" name="alamat_ketua" required>
							Alamat Ketua (required)
						</x-form-daftar>
						<x-form-daftar type="text" name="no_wa_ketua" required>
							Email Ketua (required)
						</x-form-daftar>
						<x-form-daftar type="text" name="jurusan_angkatan_ketua" required>
							Jurusan / Angkatan Ketua (required)
						</x-form-daftar>
						<x-form-daftar type="file" name="foto_ketua" required>
							Foto Ketua (required)
						</x-form-daftar>
						<x-form-daftar type="file" name="ktm_ketua" required>
							Ktm Ketua (required)
						</x-form-daftar>
						<!-- TOMBOL SUBMIT -->
						<input type="submit" name="submit" value="submit" class="btn btn-primary"/>
					</form>
				</div>
			</div>
		</div>
	</div>
</x-container>
@endsection
