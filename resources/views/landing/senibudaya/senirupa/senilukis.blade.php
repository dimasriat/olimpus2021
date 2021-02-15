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
					<form method="POST" action="{{ route('landing.senibudaya.senirupa.senilukis.store') }}" enctype="multipart/form-data">
						@csrf

						<!-- FORM EMAIL -->
						<div class="form-group">
							<label for="email">Email (required):</label><br/>
							<input id="email" type="text" name="email"  value="{{ old('email') }}" class="form-control"/>
						</div>

						<!-- FORM FAKULTAS -->
						<div class="form-group">
							<label for="fakultas">Fakultas (required):</label><br/>
							<input id="fakultas" type="text" name="fakultas" value="{{ old('fakultas') }}" class="form-control"/>
						</div>

						<!-- FORM WHATSAPP PESERTA -->
						<div class="form-group">
							<label for="no_wa_peserta">No Whatsapp Peserta (required):</label><br/>
							<input id="no_wa_peserta" type="text" name="no_wa_peserta" value="{{ old('no_wa_peserta') }}" class="form-control"/>
						</div>

						<!-- FORM NAMA LENGKAP PESERTA -->
						<div class="form-group">
							<label for="nama_peserta">Nama Lengkap Peserta (required):</label><br/>
							<input id="nama_peserta" type="text" name="nama_peserta" value="{{ old('nama_peserta') }}" class="form-control"/>
						</div>	
						
						<!-- FORM NIM / JURUSAN PESERTA -->
						<div class="form-group">
							<label for="nim_peserta">NIM Peserta (required):</label><br/>
							<input id="nim_peserta" type="text" name="nim_peserta" value="{{ old('nim_peserta') }}" class="form-control"/>
						</div>
						
						<!-- FORM PAS FOTO FORMAL PESERTA -->
						<div class="form-group">
							<label for="foto_peserta">Pas Foto Formal Peserta (Required):</label><br/>
							<input id="foto_peserta" type="file" name="foto_peserta" value="{{ old('foto_peserta') }}" class="form-control-file"/>
						</div>
						
						<!-- FORM KTM / KRS PESERTA -->
						<div class="form-group">
							<label for="ktm_peserta">KTM / KRS Ketua Semester Peserta (Required):</label><br/>
							<input id="ktm_peserta" type="file" name="ktm_peserta" value="{{ old('ktm_peserta') }}" class="form-control-file"/>
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
