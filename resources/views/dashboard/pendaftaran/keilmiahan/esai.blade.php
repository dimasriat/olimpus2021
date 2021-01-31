@extends("layouts.app")

@section("content")
	<h2>Pendaftaran Esai</h2>

	<!-- DATA YANG SUDAH TERKONFIRMASI -->
	<h3>Sudah Terkonfirmasi</h3>
	@if (count($table_data_confirmed))
	<table>
		<!-- TABLE HEADING -->
		<tr>
			<th>id</th>
			<th>Action</th>
			<th>Nama Ketua</th>
			<th>Fakultas</th>
			<th>Jurusan</th>
			<th>Angkatan</th>
			<th>Whatsapp</th>
			<th>Foto Ketua</th>
			<th>Ktm Ketua</th>
		</tr>

		<!-- TABLE BODY -->
		@foreach($table_data_confirmed as $row)
		<tr>
			<td>{{ $row->id }}</td>
			<td>
				<form action="{{ route('pendaftaran.esai.update') }}" method="POST">
					@csrf
					@method('put')
					<input type="hidden" name="row_id" value="{{ $row->id }}" />
					<input type="hidden" name="set_value" value="0" />
					<input type="submit" value="batalkan" />
				</form>
			</td>
			<td>{{ $row->nama_ketua }}</td>
			<td>{{ $row->fakultas }}</td>
			<td>{{ $row->jurusan_ketua }}</td>
			<td>{{ $row->angkatan_ketua }}</td>
			<td>{{ $row->no_wa_ketua }}</td>
			<td>
				<a href="{{ asset('pendaftaran/' . $row->foto_ketua) }}">
					<img src="{{ asset('pendaftaran/' . $row->foto_ketua) }}" />
				</a>
			</td>
			<td>
				<a href="{{ asset('pendaftaran/' . $row->ktm_ketua) }}">
					<img src="{{ asset('pendaftaran/' . $row->ktm_ketua) }}" />
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
			<th>Nama Ketua</th>
			<th>Fakultas</th>
			<th>Jurusan</th>
			<th>Angkatan</th>
			<th>Whatsapp</th>
			<th>Foto Ketua</th>
			<th>Ktm Ketua</th>
		</tr>

		<!-- TABLE BODY -->
		@foreach($table_data_not_confirmed as $row)
		<tr>
			<td>{{ $row->id }}</td>
			<td>
				<form action="{{ route('pendaftaran.esai.update') }}" method="POST">
					@csrf
					@method('put')
					<input type="hidden" name="row_id" value="{{ $row->id }}" />
					<input type="hidden" name="set_value" value="1" />
					<input type="submit" value="konfirmasi" />
				</form>
			</td>
			<td>{{ $row->nama_ketua }}</td>
			<td>{{ $row->fakultas }}</td>
			<td>{{ $row->jurusan_ketua }}</td>
			<td>{{ $row->angkatan_ketua }}</td>
			<td>{{ $row->no_wa_ketua }}</td>
			<td>
				<a href="{{ asset('pendaftaran/' . $row->foto_ketua) }}">
					<img src="{{ asset('pendaftaran/' . $row->foto_ketua) }}" />
				</a>
			</td>
			<td>
				<a href="{{ asset('pendaftaran/' . $row->ktm_ketua) }}">
					<img src="{{ asset('pendaftaran/' . $row->ktm_ketua) }}" />
				</a>
			</td>
		</tr>
		@endforeach
	</table>
	@endif
@endsection