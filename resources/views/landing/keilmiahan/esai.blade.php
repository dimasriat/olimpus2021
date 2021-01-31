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
					<form method="POST" action="{{ route('landing.keilmiahan.esai.store') }}" enctype="multipart/form-data">
						@csrf

						<!-- FORM FAKULTAS -->
						<div class="form-group">
							<label for="fakultas">Fakultas (required):</label><br/>
							<input id="fakultas" type="text" name="fakultas" value="{{ old('fakultas') }}" class="form-control"/>
						</div>

						<!-- FORM WHATSAPP KETUA TIM -->
						<div class="form-group">
							<label for="no_wa_ketua">No Whatsapp Ketua TIM (required):</label><br/>
							<input id="no_wa_ketua" type="text" name="no_wa_ketua" value="{{ old('no_wa_ketua') }}" class="form-control"/>
						</div>

						<!-- FORM NAMA LENGKAP KETUA TIM -->
						<div class="form-group">
							<label for="nama_ketua">Nama Lengkap Ketua TIM (required):</label><br/>
							<input id="nama_ketua" type="text" name="nama_ketua" value="{{ old('nama_ketua') }}" class="form-control"/>
						</div>	
						
						<!-- JURUSAN KETUA TIM -->
						<div class="form-group">
							<label for="jurusan_ketua">Jurusan Ketua TIM (required):</label><br/>
							<input id="jurusan_ketua" type="text" name="jurusan_ketua" value="{{ old('jurusan_ketua') }}" class="form-control"/>
						</div>
						
						<!-- ANGKATAN KETUA TIM -->
						<div class="form-group">
							<label for="angkatan_ketua">Angkatan Ketua TIM (required):</label><br/>
							<!-- <input id="angkatan_ketua" type="text" name="angkatan_ketua" value="{{ old('angkatan_ketua') }}" class="form-control"/> -->
							<select id="angkatan_ketua" type="text" name="angkatan_ketua"  class="form-control">
								<option>2017</option>
								<option>2018</option>
								<option>2019</option>
								<option>2020</option>
							</select>
						</div>

						<!-- FORM PAS FOTO FORMAL KETUA -->
						<div class="form-group">
							<label for="foto_ketua">Pas Foto Formal Ketua (Required):</label><br/>
							<input id="foto_ketua" type="file" name="foto_ketua" value="{{ old('foto_ketua') }}" class="form-control-file"/>
						</div>
						
						<!-- FORM KTM / KRS KETUA -->
						<div class="form-group">
							<label for="ktm_ketua">KTM / KRS Ketua Semester terakhir (Required):</label><br/>
							<input id="ktm_ketua" type="file" name="ktm_ketua" value="{{ old('ktm_ketua') }}" class="form-control-file"/>
						</div>

						<!-- FORM NAMA ANGGOTA TIM -->
						<div class="form-group">
							<label for="nama_anggota">Nama Anggota TIM:</label><br/>
							<input id="nama_anggota" type="text" name="nama_anggota" value="{{ old('nama_anggota') }}" class="form-control"/>
						</div>

						<!-- FORM NIM / JURUSAN ANGGOTA TIM -->
						<div class="form-group">
							<label for="jurusan_anggota">Jurusan Anggota TIM:</label><br/>
							<input id="jurusan_anggota" type="text" name="jurusan_anggota" value="{{ old('jurusan_anggota') }}" class="form-control"/>
						</div>

						<!-- ANGKATAN ANGGOTA TIM -->
						<div class="form-group">
							<label for="angkatan_anggota">Angkatan Anggota TIM:</label><br/>
							<!-- <input id="angkatan_anggota" type="text" name="angkatan_anggota" value="{{ old('angkatan_anggota') }}" class="form-control"/> -->
							<select id="angkatan_anggota" type="text" name="angkatan_anggota"  class="form-control">
								<option>2017</option>
								<option>2018</option>
								<option>2019</option>
								<option>2020</option>
							</select>
						</div>

						<!-- FORM PAS FOTO FORMAL ANGGOTA -->
						<div class="form-group">
							<label for="foto_anggota">Pas Foto Formal Anggota 1:</label><br/>
							<input id="foto_anggota" type="file" name="foto_anggota" value="{{ old('foto_anggota') }}" class="form-control-file"/>
						</div>	

						<!-- KTM / KRS ANGGOTA -->
						<div class="form-group">
							<label for="ktm_anggota">KTM / KRS Anggota Semester terakhir:</label><br/>
							<input id="ktm_anggota" type="file" name="ktm_anggota" value="{{ old('ktm_anggota') }}" class="form-control-file"/>
						</div>

						<!-- TOMBOL SUBMIT -->
						<input type="submit" name="submit" value="submit" class="btn btn-primary"/>
					</form>
				</div>
			</div>
		</div>
	</div>
</x-container>
@endsection
