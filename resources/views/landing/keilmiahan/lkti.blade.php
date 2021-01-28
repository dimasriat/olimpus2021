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
					<form method="POST" action="{{ route('landing.keilmiahan.lkti.store') }}" enctype="multipart/form-data">
						@csrf
						<div class="form-group">
							<label for="email">Email (required):</label><br/>
							<input id="email" type="text" name="email"  value="{{ old('email') }}" class="form-control"/>
						</div>
						<div class="form-group">
							<label for="fakultas">Fakultas (required):</label><br/>
							<input id="fakultas" type="text" name="fakultas" value="{{ old('fakultas') }}" class="form-control"/>
						</div>

						<div class="form-group">
							<label for="no_wa_ketua">No Whatsapp Ketua TIM (required):</label><br/>
							<input id="no_wa_ketua" type="text" name="no_wa_ketua" value="{{ old('no_wa_ketua') }}" class="form-control"/>
						</div>
						<div class="form-group">
							<label for="nama_ketua">Nama Lengkap Ketua TIM (required):</label><br/>
							<input id="nama_ketua" type="text" name="nama_ketua" value="{{ old('nama_ketua') }}" class="form-control"/>
						</div>	
						<div class="form-group">
							<label for="nim_jurusan_ketua">NIM / Jurusan Ketua TIM (required):</label><br/>
							<input id="nim_jurusan_ketua" type="text" name="nim_jurusan_ketua" value="{{ old('nim_jurusan_ketua') }}" class="form-control"/>
						</div>
						<div class="form-group">
							<label for="foto_ketua">Pas Foto Formal Ketua (Required):</label><br/>
							<input id="foto_ketua" type="file" name="foto_ketua" value="{{ old('foto_ketua') }}" class="form-control-file"/>
						</div>
						<div class="form-group">
							<label for="ktm_ketua">KTM / KRS Ketua Semester terakhir (Required):</label><br/>
							<input id="ktm_ketua" type="file" name="ktm_ketua" value="{{ old('ktm_ketua') }}" class="form-control-file"/>
						</div>

						<div class="form-group">
							<label for="nama_anggota_1">Nama Anggota TIM:</label><br/>
							<input id="nama_anggota_1" type="text" name="nama_anggota_1" value="{{ old('nama_anggota_1') }}" class="form-control"/>
						</div>	
						<div class="form-group">
							<label for="nim_jurusan_anggota_1">NIM / Jurusan Anggota TIM:</label><br/>
							<input id="nim_jurusan_anggota_1" type="text" name="nim_jurusan_anggota_1" value="{{ old('nim_jurusan_anggota_1') }}" class="form-control"/>
						</div>
						<div class="form-group">
							<label for="foto_anggota_1">Pas Foto Formal Anggota 1:</label><br/>
							<input id="foto_anggota_1" type="file" name="foto_anggota_1" value="{{ old('foto_anggota_1') }}" class="form-control-file"/>
						</div>	
						<div class="form-group">
							<label for="ktm_anggota_1">KTM / KRS Anggota 1 Semester terakhir:</label><br/>
							<input id="ktm_anggota_1" type="file" name="ktm_anggota_1" value="{{ old('ktm_anggota_1') }}" class="form-control-file"/>
						</div>

						<div class="form-group">
							<label for="nama_anggota_2">Nama Anggota TIM:</label><br/>
							<input id="nama_anggota_2" type="text" name="nama_anggota_2" value="{{ old('nama_anggota_2') }}" class="form-control"/>
						</div>	
						<div class="form-group">
							<label for="nim_jurusan_anggota_2">NIM / Jurusan Anggota TIM:</label><br/>
							<input id="nim_jurusan_anggota_2" type="text" name="nim_jurusan_anggota_2" value="{{ old('nim_jurusan_anggota_2') }}" class="form-control"/>
						</div>
						<div class="form-group">
							<label for="foto_anggota_2">Pas Foto Formal Anggota 2:</label><br/>
							<input id="foto_anggota_2" type="file" name="foto_anggota_2" value="{{ old('foto_anggota_2') }}" class="form-control-file"/>
						</div>
						<div class="form-group">
							<label for="ktm_anggota_2">KTM / KRS Anggota 2 Semester terakhir:</label><br/>
							<input id="ktm_anggota_2" type="file" name="ktm_anggota_2" value="{{ old('ktm_anggota_2') }}" class="form-control-file"/>
						</div>

						<input type="submit" name="submit" value="submit" class="btn btn-primary"/>
					</form>
				</div>
			</div>
		</div>
	</div>
</x-container>
@endsection
