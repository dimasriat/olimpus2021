@extends("layouts.landing")

@section("content")
<x-container class="py-5" style="min-height: 480px; background-image: url('{{ asset('img/bg-2.jpg') }}'); background-size: cover; background-attachment: fixed; background-position: center;" >
	<div class="h1 text-center font-weight-bold py-5 text-white">Daftar LKTI</div>
	<div class="row">
		<div class="col-12 col-lg my-3">
			<div class="card shadow h-100">
				<div class="card-body">
					<p class="text-success font-weight-bold">{{ session('status') }}</p>
					<p>Silakan konfirmasi pendaftaran dengan klik tombol ini</p>
					<p><a href="#" class="btn btn-success w-100">Konfirmasi Pendaftaran LKTI (Whatsapp)</a></p>
					<p>Kemudian silakan lakukan pembayaran menuju rekning ini</p>
					<p class="font-weight-bold text-danger h1">05912312391283 a.n IVA (BNI)</p>
					<p class="font-weight-bold text-success">dan lakukan konfirmasi kembali apabila sudah membayar dengan mengirim bukti struk pembayaran</p>
				</div>
			</div>
		</div>
	</div>
</x-container>
@endsection
