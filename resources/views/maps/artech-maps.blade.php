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
	<div class="overlay" id="overlay">
		<div id="window-control">
			<button class="desc control-btn" id="desc-overlay">Show Description</button>
			<button class="zoom control-btn" id="zoom-overlay">Zoom</button>
			<button class="close control-btn" id="close-overlay">Close</button>
		</div>
		<div id="window-content">
			<img src="" id="art-image" data-art="" data-desc="" />
		</div>
	</div>

	<div class="credit">
		<img src="{{ asset('img/logo-big.png') }}" alt="Olimpus" class="img-fluid" style="max-height:32px" />
		<div>Olimpus 2021 | Art and Technology Paradise</div>
	</div>

	<script src="{{ asset('js/three.min.js') }}"></script>
	<script src="{{ asset('js/panolens.min.js') }}"></script>
	<script src="{{ asset('js/artech-init.js') }}"></script>
	<script src="{{ asset('js/artech.js') }}"></script>

</body>

</html>