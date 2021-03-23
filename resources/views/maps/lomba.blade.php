<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="--UA-Compatible" content="IE=edge">
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
			<div id="pendaftaran">
				<h2>Pendaftaran Lomba</h2>
				<div id="bidang-container">
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
			<div id="score-board">
				<h2>Perolehan Skor</h2>
				<div id="score-board-container">
					<div id="score-table">
						<table>
							<tr>
								<th>Fakultas</th>
								<th>1st 🥇</th>
								<th>2nd 🥈</th>
								<th>3rd 🥉</th>
							</tr>
							<tr>
								<td>FMIPA</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
							</tr>
							<tr>
								<td>FKOR</td>
								<td>1</td>
								<td>-</td>
								<td>-</td>
							</tr>
							<tr>
								<td>FT</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
							</tr>
							<tr>
								<td>FH</td>
								<td>-</td>
								<td>-</td>
								<td>1</td>
							</tr>
							<tr>
								<td>FKIP</td>
								<td>-</td>
								<td>1</td>
								<td>-</td>
							</tr>
							<tr>
								<td>SV</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
							</tr>
							<tr>
								<td>FEB</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
							</tr>
							
							<tr>
								<td>FIB</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
							</tr>
							<tr>
								<td>FISIP</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
							</tr>
						</table>
					</div>

					<div id="score-content">
						<table>
							<tr>
								<th colspan="3">Pubg Mobile</th>
							</tr>
							<tr>
								<td>1st</td>
								<td>FKOR</td>
								<td>Team B</td>
							</tr>
							<tr>
								<td>2nd</td>
								<td>FKIP</td>
								<td>JPTK Gaming</td>
							</tr>
							<tr>
								<td>3rd</td>
								<td>FH</td>
								<td>A</td>
							</tr>
						</table>
						<table>
							<tr>
								<th colspan="3">LOMBA 2</th>
							</tr>
							<tr>
								<td>1st</td>
								<td>-</td>
								<td>-</td>
							</tr>
							<tr>
								<td>2nd</td>
								<td>-</td>
								<td>-</td>
							</tr>
							<tr>
								<td>3rd</td>
								<td>-</td>
								<td>-</td>
							</tr>
						</table>
						<table>
							<tr>
								<th colspan="3">LOMBA 3</th>
							</tr>
							<tr>
								<td>1st</td>
								<td>-</td>
								<td>-</td>
							</tr>
							<tr>
								<td>2nd</td>
								<td>-</td>
								<td>-</td>
							</tr>
							<tr>
								<td>3rd</td>
								<td>-</td>
								<td>-</td>
							</tr>
						</table>
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