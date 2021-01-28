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
					<form method="POST" action="{{ route('landing.keilmiahan.debat.store') }}" enctype="multipart/form-data">
						@csrf
						<div class="form-group">
							<label for="nama_tim">Nama Tim (required):</label><br/>
							<input id="nama_tim" type="text" name="nama_tim"  value="{{ old('nama_tim') }}" class="form-control"/>
						</div>
						<div class="form-group">
							<label for="fakultas">Fakultas (required):</label><br/>
							<input id="fakultas" type="text" name="fakultas" value="{{ old('fakultas') }}" class="form-control"/>
						</div>
						@for($i = 1; $i <= 3; $i++)
						<div class="form-group">
							<label for="nama_speaker_{{ $i }}">Nama Speaker {{ $i }} (required):</label><br/>
							<input id="nama_speaker_{{ $i }}" type="text" name="nama_speaker_{{ $i }}" value="{{ old('nama_speaker_' . $i) }}" class="form-control"/>
						</div>
						<div class="form-group">
							<label for="angkatan_nim_speaker_{{ $i }}">Angkatan / NIM Speaker {{ $i }} (required):</label><br/>
							<input id="angkatan_nim_speaker_{{ $i }}" type="text" name="angkatan_nim_speaker_{{ $i }}" value="{{ old('angkatan_nim_speaker_'. $i) }}" class="form-control"/>
						</div>	
						<div class="form-group">
							<label for="no_wa_speaker_{{ $i }}">Nomor WA Speaker {{ $i }} (required):</label><br/>
							<input id="no_wa_speaker_{{ $i }}" type="text" name="no_wa_speaker_{{ $i }}" value="{{ old('no_wa_speaker_' . $i) }}" class="form-control"/>
						</div>
						<div class="form-group">
							<label for="foto_speaker_{{ $i }}">Pas Foto Formal Speaker {{ $i }} (Required):</label><br/>
							<input id="foto_speaker_{{ $i }}" type="file" name="foto_speaker_{{ $i }}" value="{{ old('foto_speaker_' . $i) }}" class="form-control-file"/>
						</div>
						<div class="form-group">
							<label for="ktm_speaker_{{ $i }}">KTM / KRS Speaker {{ $i }} Semester terakhir (Required):</label><br/>
							<input id="ktm_speaker_{{ $i }}" type="file" name="ktm_speaker_{{ $i }}" value="{{ old('ktm_speaker_' . $i) }}" class="form-control-file"/>
						</div>
						@endfor
						<input type="submit" name="submit" value="submit" class="btn btn-primary"/>
					</form>
				</div>
			</div>
		</div>
	</div>
</x-container>
@endsection
