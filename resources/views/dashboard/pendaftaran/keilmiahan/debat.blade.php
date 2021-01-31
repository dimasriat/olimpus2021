@extends("layouts.app")

@section("content")
	<h2>Pendaftaran Debat</h2>

	<!-- DATA YANG SUDAH TERKONFIRMASI -->
	<h3>Sudah Terkonfirmasi</h3>
	@if (count($table_data_confirmed))
	<table>
		<!-- TABLE HEADING -->
		<tr>
			<th>id</th>
			<th>Action</th>
			<th>Nama Tim</th>
			<th>Fakultas</th>
			<th>Nama Speaker 1</th>
			<th>Angkatan NIM Speaker 1</th>
			<th>Whatsapp Speaker 1</th>
			<th>Foto Speaker 1</th>
			<th>Ktm Speaker 1</th>
		</tr>

		<!-- TABLE BODY -->
		@foreach($table_data_confirmed as $row)
		<tr>
			<td>{{ $row->id }}</td>
			<td>
				<form action="{{ route('pendaftaran.debat.update') }}" method="POST">
					@csrf
					@method('put')
					<input type="hidden" name="row_id" value="{{ $row->id }}" />
					<input type="hidden" name="set_value" value="0" />
					<input type="submit" value="batalkan" />
				</form>
			</td>
			<td>{{ $row->nama_tim }}</td>
			<td>{{ $row->fakultas }}</td>
			<td>{{ $row->nama_speaker_1 }}</td>
			<td>{{ $row->angkatan_nim_speaker_1 }}</td>
			<td>{{ $row->no_wa_speaker_1 }}</td>
			<td>
				<a href="{{ asset('pendaftaran/' . $row->foto_speaker_1) }}">
					<img src="{{ asset('pendaftaran/' . $row->foto_speaker_1) }}" />
				</a>
			</td>
			<td>
				<a href="{{ asset('pendaftaran/' . $row->ktm_speaker_1) }}">
					<img src="{{ asset('pendaftaran/' . $row->ktm_speaker_1) }}" />
				</a>
			</td>
		</tr>
		@endforeach
	</table>
	@endif

	<!-- DATA YANG BELUM TERKONFIRMASI -->
	<h3>Belum Terkonfirmasi</h3>
	@if (count($table_data_not_confirmed))	
	<table>
		<!-- TABLE HEADING -->
		<tr>
			<th>id</th>
			<th>Action</th>
			<th>Nama Tim</th>
			<th>Fakultas</th>
			<th>Nama Speaker 1</th>
			<th>Angkatan NIM Speaker 1</th>
			<th>Whatsapp Speaker 1</th>
			<th>Foto Speaker 1</th>
			<th>Ktm Speaker 1</th>
		</tr>

		<!-- TABLE BODY -->
		@foreach($table_data_not_confirmed as $row)
		<tr>
			<td>{{ $row->id }}</td>
			<td>
				<form action="{{ route('pendaftaran.debat.update') }}" method="POST">
					@csrf
					@method('put')
					<input type="hidden" name="row_id" value="{{ $row->id }}" />
					<input type="hidden" name="set_value" value="1" />
					<input type="submit" value="konfirmasi" />
				</form>
			</td>
			<td>{{ $row->nama_tim }}</td>
			<td>{{ $row->fakultas }}</td>
			<td>{{ $row->nama_speaker_1 }}</td>
			<td>{{ $row->angkatan_nim_speaker_1 }}</td>
			<td>{{ $row->no_wa_speaker_1 }}</td>
			<td>
				<a href="{{ asset('pendaftaran/' . $row->foto_speaker_1) }}">
					<img src="{{ asset('pendaftaran/' . $row->foto_speaker_1) }}" />
				</a>
			</td>
			<td>
				<a href="{{ asset('pendaftaran/' . $row->ktm_speaker_1) }}">
					<img src="{{ asset('pendaftaran/' . $row->ktm_speaker_1) }}" />
				</a>
			</td>
		</tr>
		@endforeach
	</table>
	@endif
@endsection