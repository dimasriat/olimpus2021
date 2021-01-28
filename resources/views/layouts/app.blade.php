<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ini Judul</title>	
	<style>
		select, textarea, input {
			margin: 0.5rem 0;
		}
		td, th {
			border: 1px solid lightgray;
			padding: 0.25rem;
			word-wrap: break-word;
		}
		table {
			margin: 1rem 0;
			table-layout: fixed;
			width: 100%;
		}
	</style>
</head>

<body>
	<h1>LARAVEL</h1>
	<nav>
		<a href="/">Home</a>
		@auth
		<a href="{{ route('pendaftaran.index') }}">Pendaftaran</a>
		<form method="POST" action="{{ route('logout') }}">
			@csrf
			<input type="submit" value="logout"/>
		</form>
		@else
		<a href="{{ route('login') }}">Login</a>
		<a href="{{ route('register') }}">Register</a>
		@endauth
	</nav>
	@yield("content")
</body>

</html>