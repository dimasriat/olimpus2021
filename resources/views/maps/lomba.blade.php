<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Olimpus 2021</title>
	<link rel="stylesheet" href="{{ asset('css/lomba.css') }}" />
	<link rel="shortcut icon" href="{{ asset('img/logo-big.png') }}" type="image/png">
</head>

<body>
	<div id="wrapper">
		<header>
			<img src="{{ asset('img/logo-big.png') }}" alt="Olimpus" class="img-fluid" style="max-height:32px" />
			<div>Olimpus 2021</div>
		</header>
		<main>
			<div id="content">
				<h2>Pendaftaran Lomba</h2>
				<div id="bidang-container">
					<div class="bidang">
						<h3>Olahraga</h3>
						<a href="{{ route('landing.olahraga.catur.index') }}">Catur</a>
					</div>
					<div class="bidang">
						<h3>Seni Budaya</h3>
						<a href="{{ route('landing.senibudaya.senisastra.mhq.index') }}">Hifdzil Qur'an</a>
					</div>
					<div class="bidang">
						<h3>Keilmiahan</h3>
						<a href="{{ route('landing.keilmiahan.speech.index') }}">Speech</a>
					</div>
				</div>
			</div>
		</main>
		<footer>
			<div>Copyright © 2021 Olimpus UNS. All rights reserved.</div>
		</footer>
	</div>

</body>

</html>