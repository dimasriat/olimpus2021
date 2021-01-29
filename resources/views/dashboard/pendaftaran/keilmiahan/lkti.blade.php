@extends("layouts.app")

@section("content")
	<h2>Pendaftaran LKTI</h2>

	<!-- DATA YANG SUDAH TERKONFIRMASI -->
	<h3>Sudah Terkonfirmasi</h3>
	@if (count($table_data_confirmed))
	<table>
		<!-- TABLE HEADING -->
		<tr>
			<th>Email</th>
			<th>Nama</th>
			<th>Fakultas</th>
			<th>NIM</th>
			<th>Whatsapp</th>
			<th>Action</th>
		</tr>

		<!-- TABLE BODY -->
		@foreach($table_data_confirmed as $row)
		<tr>
			<td>{{ $row->email }}</td>
			<td>{{ $row->nama_ketua }}</td>
			<td>{{ $row->fakultas }}</td>
			<td>{{ $row->nim_jurusan_ketua }}</td>
			<td>{{ $row->no_wa_ketua }}</td>
			<td>
				<form action="{{ route('pendaftaran.lkti.update') }}" method="POST">
					@csrf
					@method('put')
					<input type="hidden" name="row_id" value="{{ $row->id }}" />
					<input type="hidden" name="set_value" value="0" />
					<input type="submit" value="batalkan" />
				</form>
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
			<th>Email</th>
			<th>Nama</th>
			<th>Fakultas</th>
			<th>NIM</th>
			<th>Whatsapp</th>
			<th>Action</th>
		</tr>

		<!-- TABLE BODY -->
		@foreach($table_data_not_confirmed as $row)
		<tr>
			<td>{{ $row->email }}</td>
			<td>{{ $row->nama_ketua }}</td>
			<td>{{ $row->fakultas }}</td>
			<td>{{ $row->nim_jurusan_ketua }}</td>
			<td>{{ $row->no_wa_ketua }}</td>
			<td>
				<form action="{{ route('pendaftaran.lkti.update') }}" method="POST">
					@csrf
					@method('put')
					<input type="hidden" name="row_id" value="{{ $row->id }}" />
					<input type="hidden" name="set_value" value="1" />
					<input type="submit" value="konfirmasi" />
				</form>
			</td>
		</tr>
		@endforeach
	</table>
	@endif
@endsection