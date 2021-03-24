<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width, shrink-to-fit=no">
	<title>Olimpus 2021 | Artech</title>
	<link rel="stylesheet" href="{{ asset('css/style.css') }}" />
	<link rel="shortcut icon" href="{{ asset('img/logo-big.png') }}" type="image/png">
	<link rel="stylesheet" href="{{ asset('css/artech.css') }}">
</head>

<body>
	<header>
		<img src="img/logo-big.png" />
		<div>Olimpus 2021 | Art and Technology Paradise</div>
	</header>
	<input id="copytext" type="text" />
	<div id="overlay">
		<div id="overlay-control">
			<button id="overlay-desc-toggle">Toggle Description</button>
			<button id="overlay-close">Close</button>
		</div>
		<div id="overlay-content">
			<div id="art-container">
				<img src="/img/artech_assets/art/1/art1.jpg" class="art-img" id="art-1-1" />
			</div>
			<div id="desc-container">
				<img src="/img/artech_assets/art/1/desc1.jpg" class="desc-img" id="desc-1-1" />
			</div>
		</div>
	</div>
	<div id="viewer"></div>

	<script src="{{ asset('js/three.min.js') }}"></script>
	<script src="{{ asset('js/panolens.min.js') }}"></script>
	<script src="{{ asset('js/artech-init.js') }}"></script>
	<script src="{{ asset('js/artech.js') }}"></script>

</body>

</html>