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
<title>Dragutin Domjanić</title>
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
						<h2>BOŽIĆ</h2>
						<p>Posipal bi snegom</p>
						<p>vse pute</p>
						<p>i spunil z veseljem</p>
						<p>vse kute,</p>
						<p>da smeh i popevka zvoni,</p>
						<p>da brigah i tugah</p>
						<p>ni,</p>
						<p>da suza već oko ne muti,</p>
						<p>da vsaki si v srcu</p>
						<p>oćuti:</p>
						<p>Božić je došel nam vesel,</p>
						<p>vsakomu sreće donesel</p>
						<p>v sela i grade i gaj,</p>
						<p>meni takaj!</p>
					</div>
						<label class="back-btn" for="c1">Natrag</label>
				</div>
						<div class="front">
							<img src="..//Slike/DragutinDomjanićPrednjaKorica.jpg" >
							<label class="next-btnFrontPage" for="c1">Sljedeća</label>
						</div>
			</div>

			<div class="flip" id="p2">
				<div class="back1">
					<div class="center" id="text3">
						<h2>BRVČICA</h2>
						<p>Brvčica ćez potok vodi,</p>
						<p>Voda se sveti,</p>
						<p>Snešica po brvi hodi,</p>
						<p>V vodu se gledi.</p>
						<p>Naj se gledet, sneša mlada,</p>
						<p>Vodi vere nî!</p>
						<p>Tam v glibljini sredi hlada</p>
						<p>Za navek se spi.</p>
						<p>Hodi sim vu lug zeleni,</p>
						<p>Jagoda diši.</p>
						<p>Buš ti dala kušat meni</p>
						<p>Si li slajša ti!</p>
					</div>
						<label class="back-btn" for="c2">Natrag</label>
				</div>
						<div class="front">
							<div class="center" id="text2">
								<h2>BEZEG SE BELI</h2>
								<p>Bezeg se beli iz kmice,</p>
								<p>kak je belo tvoje lice.</p>
								<p>Bezeg stiha mi diši,</p>
								<p>kak si sladka ti.</p>
								<p>Gaj je tih i on posluša,</p>
								<p>si i ti još budna duša?</p>
								<p>Čeka si slavička gaj,</p>
								<p>zmisliš me se kaj?</p>
								<p>Ni slavička sad već čuti,</p>
								<p>zginuli su kam i puti,</p>
								<p>al moj tič ni prešel proć</p>
								<p>v onu črnu noć.</p>
								<p>Z bezga on popeva z kmice,</p>
								<p>kak je belo tvoje lice,</p>
								<p>z bezga, sladko kaj diši,</p>
								<p>kak si sladka ti.</p>
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
							<h2>ČE I KROVA NI</h2>
							<p>Mojoj hiži star je krov,</p>
							<p>Al tvoj rubec, on je nov.</p>
							<p>Rubec je od svile same,</p>
							<p>Misliš ti kaj na me?</p>
							<p>Kaj će meni krov od črepa,</p>
							<p>Kaj će hiža nova, lepa,</p>
							<p>Za te rajše vse prodam,</p>
							<p>Pak ti darek dam.</p>
							<p>Da mi dobru reč veliš,</p>
							<p>Da me milo poglediš,</p>
							<p>I da sladko se nasmeješ,</p>
							<p>Srce meni zgreješ.</p>
							<p>Da mi hoćeš srce dati,</p>
							<p>Mi bi bili mam bogati,</p>
							<p>Kak da smo v palači mi,</p>
							<p>Če i krova ni!</p>
						</div>
							<label class="next-btn" for="c3">Sljedeća</label>
					</div>
							<div class="back1">
								<div class="center" id="text5">
									<h2>CLAIR-OBSCUR</h2>
									<p>V suncu je celo dvorišće,</p>
									<p>v senci šuma spi.</p>
									<p>Koga moje srce išće,</p>
									<p>toga jošće ni.</p>
									<p>Ne bojiš se ti kmice,</p>
									<p>znaš sim pute vse.</p>
									<p>Skoro buš mi dragal lice,</p>
									<p>mam buš tu, kaj ne?</p>
									<p>Težko bu ti, znam oditi,</p>
									<p>pak bu taki dan.</p>
									<p>– Zakaj mora pri nas ziti</p>
									<p>sunce tak zaran?!</p>
								</div>
									<label class="back-btn" for="c3">Natrag</label>
							</div>
			</div>

			<div class="flip" id="p4">
				<div class="back1" >
					<div class="center" id="text7">
						<h2>DAJ RUKU!</h2>
						<p>Tak slaba ti je ruka,</p>
						<p>Kak branila te bu?</p>
						<p>A skupa mi smo jaki,</p>
						<p>Daj meni ruku tu!</p>
						<p>Ti imaš sladku tajnu,</p>
						<p>Al sramiš ju se reć,</p>
						<p>Znaš, ja i z oka čitam,</p>
						<p>Pogleč me ti, pogleč!</p>
						<p>Tak mala su ti vusta,</p>
						<p>Al jarki ogenj tam,</p>
						<p>	Daj da ti ja ga zgasim</p>
						<p>	Il da zgorim i sam.</p>
						<p>	Daj ruku, bum te pelal</p>
						<p>	Vu senjah tvojih kraj,</p>
						<p>	Gde ljubav je kak sunce,</p>
						<p>	Daj meni ruku, daj!</p>
					</div>
					<label class="back-btn" for="c4">Natrag</label>
				</div>
					<div class="front">
						<div class="center" id="text6">
							<h2>DOJDI</h2>
							<p>Vodica zvira z glibočice,</p>
							<p>kak su ti jasne te očice,</p>
							<p>jutro te z vode gledi,</p>
							<p>lepša, neg jutro si ti.</p>
							<p>Štel bi ti želje pogoditi,</p>
							<p>Štel bi za ruku te voditi,</p>
							<p>put bu dopelal nas sam</p>
							<p>k sreći, tak blizu je nam.</p>
							<p>Tičice rožnjak popevaju,</p>
							<p>dole kak srebrom zalevaju.</p>
							<p>Znaš, kaj v popevkah zvoni?</p>
							<p>Samom da radosti ni!</p>
							<p>Dojdi, bu sunčece grejalo,</p>
							<p>bu nam se srčece smejalo,</p>
							<p>bumo kak tičice dve</p>
							<p>srećni i mi dva, kaj ne?!</p>
						</div>
							<label class="next-btn" for="c4">Sljedeća</label>
					</div>
				</div>

			<div class="flip" id="p5">
				<div class="back">
					<img src="..//Slike/DragutinDomjanićZadnjaKorica.png">
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