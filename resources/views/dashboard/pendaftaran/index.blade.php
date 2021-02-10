@extends("layouts.app")

@section("content")
	<h2>Pendaftaran</h2>
	<p><a href="{{ route('pendaftaran.lkti.index') }}">LKTI</a></p>
	<p><a href="{{ route('pendaftaran.debat.index') }}">Debat</a></p>
	<p><a href="{{ route('pendaftaran.esai.index') }}">Esai</a></p>
	<p><a href="{{ route('pendaftaran.speech.index') }}">Speech</a></p>
@endsection