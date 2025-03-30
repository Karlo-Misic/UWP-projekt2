<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($conn);
?>

<!DOCTYPE html>
<html lang="en" >
<head>
<meta charset="UTF-8">
<title>Janko Polić Kamov</title>
<link rel="stylesheet" href="..//Style/style.css">
<meta name="description" content="Knjižnica">
<meta name="author" content="Karlo Mišić">
<link rel="icon" href="..//Slike/Icon.png">
</head>
<body class="background">
	<div class="book">
		<input class="input1" type="checkbox" id="c1">
		<input class="input1" type="checkbox" id="c2">
		<input class="input1" type="checkbox" id="c3">
		<input class="input1" type="checkbox" id="c4">
		<input class="input1" type="checkbox" id="c5">

		<div class="flip-book">

			<div class="flip" id="p1">
				<div class="back1">
					<div class="center" id="text1">
						<h2>U NOĆI</h2>
						<p>U golemoj tišini, gdje drijema zemska sapa,</p>
						<p>a nevidna joj ruka lagacko oči sklapa –</p>
						<p>u golemoj tišini, gdje zemska sapa drijema</p>
						<p>i crnijom je sjetom na svaki upit nijema –</p>
						<p>I bogzna kud je pošo vjerenik onaj žarki</p>
						<p>i ljubav bješe u njeg ko cjelov muških varki.</p>
						<p>O vratit će se, vratit i poljubac se vraća</p>
						<p>i sve se zaboravlja i ljubav je sve kraća.</p>
						<p>I misli se i mašta sve snenije i tiše</p>
						<p>i tupo kroči starost i ne ljubi se više.</p>
					</div>
						<label class="back-btn" for="c1">Natrag</label>
				</div>
						<div class="front">
							<img src="..//Slike/JankoPolićKamovPrednjaKorica.jpg" >
							<label class="next-btnFrontPage" for="c1">Sljedeća</label>
						</div>
			</div>

			<div class="flip" id="p2">
				<div class="back1">
					<div class="center" id="text3">
						<h2>GDJE SI DRAGA JUČER BILA</h2>
						<p>Gdje si draga jučer bila</p>
						<p>što si mene pozabila?</p>
						<p>Zašto nećeš k meni doći</p>
						<p>da ti ljubim crne oči!</p>
						<p>Tvoje lijepe očice</p>
						<p>jesu dvije svjećice.</p>
						<p>Tvoje lijepe usnice</p>
						<p>jesu dvije ružice.</p>
						<p>Čekao sam te do ponoći.</p>
						<p>Mislio sam da ćeš doći.</p>
						<p>Kad sam pogledao sat</p>
						<p>otišao sam i ja spat!</p>
					</div>
						<label class="back-btn" for="c2">Natrag</label>
				</div>
						<div class="front">
							<div class="center" id="text2">
								<h2>SUNCE</h2>
								<p>Kroz redove, gdje već meso gnjije</p>
								<p>i gdje leže polomljene kosti,</p>
								<p>gdje se patnja idiotski smije</p>
								<p>i gdje jezik osušiše psosti,</p>
								<p>On ide velik ko u priči Hrist!</p>
								<p>I zaveslao krilom laganijem</p>
								<p>pa valovlje se prosulo topline</p>
								<p>i cjelov tislo na licima svijem,</p>
								<p>gdje plam je gasno sreće i vedrine –</p>
								<p>ko Betlehemom kerubina kor!</p>
								<p>I danas je s rasipnijeh grudi</p>
								<p>ko zlatnu da je razasuo kosu</p>
								<p>i ono časkom… izmiljiše ljudi</p>
								<p>ko da ih zemlja od ludosti prosu –</p>
								<p>i dah je njegov – ko Jehovin dah!</p>
							</div>
								<label class="next-btn" for="c2">Sljedeća</label>
						</div>
			</div>

			<div class="flip" id="p3">
				<div class="back1">
					<label class="back-btn" for="c3">Natrag</label>
				</div>
					<div class="front">
						<div class="center" id="text4">
							<h2>TRAGIKA</h2>
							<p>O što nismo djeca šume</p>
							<p>u zeleni carskog granja,</p>
							<p>bezimeni ko oblačje,</p>
							<p>što ga nosi ćuh i sanja!</p>
							<p>O da sam te na planini</p>
							<p>taku našo, ženo, ženo!</p>
							<p>Ne bih pljucko jad i srdžbu</p>
							<p>na svetište razbijeno.</p>
							<p>I sve mi je ovo grko</p>
							<p>i bljuvo bih bijes i muku…</p>
							<p>O man’te me! Sâm ću tajom</p>
							<p>da progutam svoju bruku…</p>
						</div>
							<label class="next-btn" for="c3">Sljedeća</label>
					</div>
							<div class="back1">
								<div class="center" id="text5">
									<h2>PET GODINA TIHE AGONIJE</h2>
									<p>Pet godina tihe agonije,</p>
									<p>kad srce kuca i zvoni</p>
									<p>i steže se sve monotonije</p>
									<p>i umire po šabloni.</p>
									<p>U ždrijelo me katatonije</p>
									<p>podla boljetica goni.</p>
									<p>I venem sve bono i bonije</p>
									<p>ko trudni pozdrav madoni.</p>
									<p>Dok življah životom skeptika,</p>
									<p>dok sumnjah, da li me ljubi,</p>
									<p>na srcu ostavi jektika</p>
									<p>trag nekih čudnih zubi.</p>
									<p>A sad je tivot gol i tako gol;</p>
									<p>u srcu mome osta samo bol.</p>
								</div>
									<label class="back-btn" for="c3">Natrag</label>
							</div>
			</div>

			<div class="flip" id="p4">
				<div class="back1" >
					<div class="center" id="text7">
						<h2>DVADESETI VIJEK</h2>
						<p>O, u kraj s dogmom, kad se mozak</p>
						<p>u bolovima majke pati;</p>
						<p>a kad izmilji ono živo,</p>
						<p>na koljena gdje leži mati!</p>
						<p>O, u kraj s dozom moralizma,</p>
						<p>kud njegova će krenut noga:</p>
						<p>U živoj puti živa miso</p>
						<p>i cjelov na sve s ovkraj groba!</p>
					</div>
					<label class="back-btn" for="c4">Natrag</label>
				</div>
					<div class="front">
						<div class="center" id="text6">
							<h2>XX. VIJEK</h2>
							<p>O, u kraj s dogmom, kad se mozak </p>
							<p>u bolovima majke pati; </p>
							<p>a kad izmilji ono živo,</p>
							<p>na koljena gdje leži mati!</p>
							<p>O, u kraj s dozom moralizma,</p>
							<p>kud njegova će krenut noga:</p>
							<p>U živoj puti živa miso</p>
							<p>i cjelov na sve s ovkraj groba!</p>
						</div>
							<label class="next-btn" for="c4">Sljedeća</label>
					</div>
				</div>

			<div class="flip" id="p5">
				<div class="back">
					<img src="..//Slike/AntunBrankoSimicZadnjaKorica.png">
					<label class="back-btnBackPage" for="c5" name="back-btnBackPage">Natrag</label>
				</div>		
					<div class="front">
						<div class="center">
						    <img src="..//Slike/LastPage.jpg"/>
							<h2><a class="LastPage" href="GlavnaStranicaPhP.php" name="LastPage">Povratak na glavnu stranicu</a></h2>
							<label class="next-btn" for="c5" name="next-btn">Sljedeća</label>
						</div>
					</div>
			</div>
		</div>
	</div>

	<div class="autoform">
		<h1 class="textbackground">&nbsp; &nbsp; Automatsko pretraživanje &nbsp; &nbsp;</h1>
		<div class="inputcenter">
			<td>
				<input type="radio" name="=" id="auto1" >UKLJUČI &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
				<input type="radio" name="=" id="auto2" checked>ISKLJUČI
			</td>
		</div>
	</div>

	<div class="autoform1">
		<h1 class="textbackground">&nbsp; &nbsp;  Razlikuj velika i mala slova &nbsp; &nbsp;</h1>
		<div class="inputcenter">
			<td>
				<input type="radio" name="==" id="auto3" onclick="check1();" >RAZLIKUJ &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;
				<input type="radio" name="==" id="auto4" onclick="check();" >NE RAZLIKUJ
			</td>
		</div>
	</div>

	<div id="searchBox" class="form">
		<input type="text" id="input" placeholder="Unesi znak ili ključnu riječ"/>
		<button id="button" class="searchBtn">Pretraži</button>
	</div>

	<script type = "text/JavaScript" src = "../JavaScript/JavaScriptPhP.js"></script>
</body>
</html>