@extends("layouts.app")

@section("content")
<h2>Pendaftaran Catur Beregu</h2>

<!-- DATA YANG SUDAH TERKONFIRMASI -->
<h3>Sudah Terkonfirmasi</h3>
@if (count($table_data_confirmed))
<table>
	<!-- TABLE HEADING -->
	<tr>
		<th>id</th>
		<th>Action</th>
		<th>Email</th>
		<th>Fakultas</th>
		<th>Id Lichess Tim</th>

		<th>Nama Ketua</th>
		<th>Nim Jurusan Ketua</th>
		<th>No Wa Ketua</th>
		<th>Id Lichess Ketua</th>
		<th>Ktm Ketua</th>
		<th>Foto Ketua</th>
		
		<th>Nama Anggota 1</th>
		<th>Nim Jurusan Anggota 1</th>
		<th>No Wa Anggota 1</th>
		<th>Id Lichess Anggota 1</th>
		<th>Ktm Anggota 1</th>
		<th>Foto Anggota 1</th>

		<th>Nama Anggota 2</th>
		<th>Nim Jurusan Anggota 2</th>
		<th>No Wa Anggota 2</th>
		<th>Id Lichess Anggota 2</th>
		<th>Ktm Anggota 2</th>
		<th>Foto Anggota 2</th>

		<th>Nama Anggota 3</th>
		<th>Nim Jurusan Anggota 3</th>
		<th>No Wa Anggota 3</th>
		<th>Id Lichess Anggota 3</th>
		<th>Ktm Anggota 3</th>
		<th>Foto Anggota 3</th>

	</tr>

	<!-- TABLE BODY -->
	@foreach($table_data_confirmed as $row)
	<tr>
		<td>{{ $row->id }}</td>
		<td>
			<form action="{{ route('pendaftaran.catur.perorangan.update') }}" method="POST">
				@csrf
				@method('put')
				<input type="hidden" name="row_id" value="{{ $row->id }}" />
				<input type="hidden" name="set_value" value="0" />
				<input type="submit" value="batalkan" />
			</form>
		</td>
		<td>{{ $row->email }}</td>
		<td>{{ $row->fakultas }}</td>
		<td>{{ $row->id_lichess_tim }}</td>

		<td>{{ $row->nama_ketua }}</td>
		<td>{{ $row->nim_jurusan_ketua }}</td>
		<td>{{ $row->no_wa_ketua }}</td>
		<td>{{ $row->id_lichess_ketua }}</td>
		<td>
			<x-image-link src="{{ asset('pendaftaran/' . $row->ktm_ketua) }}" />
		</td>
		<td>
			<x-image-link src="{{ asset('pendaftaran/' . $row->foto_ketua) }}" />
		</td>

		<td>{{ $row->nama_anggota_1 }}</td>
		<td>{{ $row->nim_jurusan_anggota_1 }}</td>
		<td>{{ $row->no_wa_anggota_1 }}</td>
		<td>{{ $row->id_lichess_anggota_1 }}</td>
		<td>
			<x-image-link src="{{ asset('pendaftaran/' . $row->ktm_anggota_1) }}" />
		</td>
		<td>
			<x-image-link src="{{ asset('pendaftaran/' . $row->foto_anggota_1) }}" />
		</td>

		<td>{{ $row->nama_anggota_2 }}</td>
		<td>{{ $row->nim_jurusan_anggota_2 }}</td>
		<td>{{ $row->no_wa_anggota_2 }}</td>
		<td>{{ $row->id_lichess_anggota_2 }}</td>
		<td>
			<x-image-link src="{{ asset('pendaftaran/' . $row->ktm_anggota_2) }}" />
		</td>
		<td>
			<x-image-link src="{{ asset('pendaftaran/' . $row->foto_anggota_2) }}" />
		</td>

		<td>{{ $row->nama_anggota_3 }}</td>
		<td>{{ $row->nim_jurusan_anggota_3 }}</td>
		<td>{{ $row->no_wa_anggota_3 }}</td>
		<td>{{ $row->id_lichess_anggota_3 }}</td>
		<td>
			<x-image-link src="{{ asset('pendaftaran/' . $row->ktm_anggota_3) }}" />
		</td>
		<td>
			<x-image-link src="{{ asset('pendaftaran/' . $row->foto_anggota_3) }}" />
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
		<th>Email</th>
		<th>Fakultas</th>
		<th>Id Lichess Tim</th>
		
		<th>Nama Ketua</th>
		<th>Nim Jurusan Ketua</th>
		<th>No Wa Ketua</th>
		<th>Id Lichess Ketua</th>
		<th>Ktm Ketua</th>
		<th>Foto Ketua</th>
		
		<th>Nama Anggota 1</th>
		<th>Nim Jurusan Anggota 1</th>
		<th>No Wa Anggota 1</th>
		<th>Id Lichess Anggota 1</th>
		<th>Ktm Anggota 1</th>
		<th>Foto Anggota 1</th>

		<th>Nama Anggota 2</th>
		<th>Nim Jurusan Anggota 2</th>
		<th>No Wa Anggota 2</th>
		<th>Id Lichess Anggota 2</th>
		<th>Ktm Anggota 2</th>
		<th>Foto Anggota 2</th>

		<th>Nama Anggota 3</th>
		<th>Nim Jurusan Anggota 3</th>
		<th>No Wa Anggota 3</th>
		<th>Id Lichess Anggota 3</th>
		<th>Ktm Anggota 3</th>
		<th>Foto Anggota 3</th>
	</tr>

	<!-- TABLE BODY -->
	@foreach($table_data_not_confirmed as $row)
	<tr>
		<td>{{ $row->id }}</td>
		<td>
			<form action="{{ route('pendaftaran.catur.perorangan.update') }}" method="POST">
				@csrf
				@method('put')
				<input type="hidden" name="row_id" value="{{ $row->id }}" />
				<input type="hidden" name="set_value" value="1" />
				<input type="submit" value="konfirmasi" />
			</form>
		</td>
		<td>{{ $row->email }}</td>
		<td>{{ $row->fakultas }}</td>
		<td>{{ $row->id_lichess_tim }}</td>

		<td>{{ $row->nama_ketua }}</td>
		<td>{{ $row->nim_jurusan_ketua }}</td>
		<td>{{ $row->no_wa_ketua }}</td>
		<td>{{ $row->id_lichess_ketua }}</td>
		<td>
			<x-image-link src="{{ asset('pendaftaran/' . $row->ktm_ketua) }}" />
		</td>
		<td>
			<x-image-link src="{{ asset('pendaftaran/' . $row->foto_ketua) }}" />
		</td>

		<td>{{ $row->nama_anggota_1 }}</td>
		<td>{{ $row->nim_jurusan_anggota_1 }}</td>
		<td>{{ $row->no_wa_anggota_1 }}</td>
		<td>{{ $row->id_lichess_anggota_1 }}</td>
		<td>
			<x-image-link src="{{ asset('pendaftaran/' . $row->ktm_anggota_1) }}" />
		</td>
		<td>
			<x-image-link src="{{ asset('pendaftaran/' . $row->foto_anggota_1) }}" />
		</td>

		<td>{{ $row->nama_anggota_2 }}</td>
		<td>{{ $row->nim_jurusan_anggota_2 }}</td>
		<td>{{ $row->no_wa_anggota_2 }}</td>
		<td>{{ $row->id_lichess_anggota_2 }}</td>
		<td>
			<x-image-link src="{{ asset('pendaftaran/' . $row->ktm_anggota_2) }}" />
		</td>
		<td>
			<x-image-link src="{{ asset('pendaftaran/' . $row->foto_anggota_2) }}" />
		</td>

		<td>{{ $row->nama_anggota_3 }}</td>
		<td>{{ $row->nim_jurusan_anggota_3 }}</td>
		<td>{{ $row->no_wa_anggota_3 }}</td>
		<td>{{ $row->id_lichess_anggota_3 }}</td>
		<td>
			<x-image-link src="{{ asset('pendaftaran/' . $row->ktm_anggota_3) }}" />
		</td>
		<td>
			<x-image-link src="{{ asset('pendaftaran/' . $row->foto_anggota_3) }}" />
		</td>


	</tr>
	@endforeach
</table>
@endif
@endsection