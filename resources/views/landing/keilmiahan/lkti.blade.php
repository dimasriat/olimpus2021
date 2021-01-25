@extends("layouts.landing")

@section("content")
<x-container class="py-5">
	<div class="h1 text-center font-weight-bold py-5">LKTI</div>
	<div class="row">
		<div class="col-12 my-3">
			<img src="{{ asset('img/keilmiahan/lkti/pamflet.jpeg') }}" class="img-fluid w-100 shadow"/>
		</div>
		<div class="col col-lg my-3">
			<a href="#" class="btn btn-primary w-100">Download Pamflet</a>
		</div>
		<div class="col col-lg my-3">
			<a href="#" class="btn btn-danger w-100">Download Guide Book</a>
		</div>
		<div class="col-12 col-lg my-3">
			<a href="#" class="btn btn-success w-100">Hubungi Contact Person LKTI (Whatsapp)</a>
		</div>
	</div>
</x-container>
<x-container class="py-5" style="min-height: 480px; background-image: url('{{ asset('img/bg-2.jpg') }}'); background-size: cover; background-attachment: fixed; background-position: center;" >
	<div class="h1 text-center font-weight-bold py-5 text-white">Daftar LKTI</div>
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
					<form method="POST" action="{{ route('landing.keilmiahan.lkti.store') }}">
						@csrf
						<div class="form-group">
							<label for="email">Email:</label><br/>
							<input id="email" type="text" name="email"  value="{{ old('email') }}" class="form-control"/>
						</div>
						<div class="form-group">
							<label for="fakultas">Fakultas:</label><br/>
							<input id="fakultas" type="text" name="fakultas" value="{{ old('fakultas') }}" class="form-control"/>
						</div>
						<div class="form-group">
							<label for="no_wa_ketua">No Whatsapp Ketua TIM:</label><br/>
							<input id="no_wa_ketua" type="text" name="no_wa_ketua" value="{{ old('no_wa_ketua') }}" class="form-control"/>
						</div>
						<div class="form-group">
							<label for="nama_ketua">Nama Lengkap Ketua TIM:</label><br/>
							<input id="nama_ketua" type="text" name="nama_ketua" value="{{ old('nama_ketua') }}" class="form-control"/>
						</div>	
						<div class="form-group">
							<label for="nim_jurusan_ketua">NIM / Jurusan Ketua TIM:</label><br/>
							<input id="nim_jurusan_ketua" type="text" name="nim_jurusan_ketua" value="{{ old('nim_jurusan_ketua') }}" class="form-control"/>
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
							<label for="nama_anggota_2">Nama Anggota TIM:</label><br/>
							<input id="nama_anggota_2" type="text" name="nama_anggota_2" value="{{ old('nama_anggota_2') }}" class="form-control"/>
						</div>	
						<div class="form-group">
							<label for="nim_jurusan_anggota_2">NIM / Jurusan Anggota TIM:</label><br/>
							<input id="nim_jurusan_anggota_2" type="text" name="nim_jurusan_anggota_2" value="{{ old('nim_jurusan_anggota_2') }}" class="form-control"/>
						</div>
						<div class="form-group">
							<label for="nama_pembimbing">Nama Pembimbing + Gelar:</label><br/>
							<input id="nama_pembimbing" type="text" name="nama_pembimbing" value="{{ old('nama_pembimbing') }}" class="form-control"/>
						</div>
						<input type="submit" name="submit" value="submit" class="btn btn-primary"/>
					</form>
				</div>
			</div>
		</div>
	</div>
</x-container>
@endsection
