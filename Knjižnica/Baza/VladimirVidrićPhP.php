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
<title>Vladimir Vidrić</title>
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
						<h2>POMPEJANSKA SLIČICA</h2>
						<p>Tamo u dolu, gdje lovori šume </p>
						<p>I srebrene vode teku,</p>
						<p>Kucaju srca. - Crni satiri</p>
						<p>Rumenog ovna peku.</p>
						<p>Pod svijetlim panjem penje se plamen,</p>
						<p>Ožarene dršću grane,</p>
						<p>O grud satiru sakriva žena</p>
						<p>Obraze milovane.</p>
						<p>A oko' u okol skaču satiri,</p>
						<p>Pak se rozima biju -</p>
						<p>Krčage nose - krčage vuku,</p>
						<p>Slađano vino piju.</p>
						<p>I vjenčav se lišćem vinjage bujne</p>
						<p>Buku podižu divlju.</p>
						<p>Kucaju srca. S ljupkog se gaja</p>
						<p>Bijele nimfe ozivlju.</p>
					</div>
						<label class="back-btn" for="c1">Natrag</label>
				</div>
						<div class="front">
							<img src="..//Slike/VladimirVidrićPrednjaKorica.jpg" >
							<label class="next-btnFrontPage" for="c1">Sljedeća</label>
						</div>
				</div>

			<div class="flip" id="p2">
				<div class="back1">
					<div class="center" id="text3">
						<h2>SILEN</h2>
						<p>U poljskoj vodi tiho mjesec sijeva,</p>
						<p>A s grmlja pada preko puta sjen.</p>
						<p>Silena vodi bahantka i pjeva,</p>
						<p>A s krupnim vrčem koleba Silen.</p>
						<p>Polako ide, smije se - i sluša:</p>
						<p>"Boginjo, šapće, ustavi se čas"</p>
						<p>K zvjezdanom nebu vrč okrenuv - kuša</p>
						<p>I sloni uz nju, bijel i sijedih vlas'.</p>
						<p>I tako idu kud se grmlje crni,</p>
						<p>Odmiču - staju - dubok smijeh je čut.</p>
						<p>Putniče, sustaj, ogledaj se, svrni;</p>
						<p>Gle, mjesec sja - i tvoj se bijeli put!</p>
					</div>
						<label class="back-btn" for="c2">Natrag</label>
				</div>
					<div class="front">
						<div class="center" id="text2">
							<h2>JUTRO</h2>
							<p>Svitaše. Još bi tama u lugu.</p>
							<p>Pan se ukaza s omašnim mijehom.</p>
							<p>On stupi na čistac pod jasiku tanku</p>
							<p>I tu se oglasi smijehom.</p>
							<p>Plahe su sjene došle iz tame</p>
							<p>I plesat stale na zelenoj travi.</p>
							<p>Bile su divlje plavojke Nymphe</p>
							<p>S bijelimi vijenci na glavi...</p>
							<p>A svitaše jutro. Rosa je pala,</p>
							<p>Pa se u krupnih kapljah blista.</p>
							<p>Sja jutarnja zvijezda. Dršće i trepti</p>
							<p>Jasika širokog lista.</p>
							<p>Pod jasikom ljupko žamore dude</p>
							<p>I igra kolo naoko Pana.</p>
							<p>A šumi lug - to ide vjetar</p>
							<p>O prvom osvitu dana...</p>
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
							<h2>NARODNA</h2>
							<p>Rumena ružo Lelijo,</p>
							<p>Eno se oblak dijeli,</p>
							<p>Nad zelen je pao vinograd</p>
							<p>Pa se kida i bijeli.</p>
							<p>Dunut će vihar s livada,</p>
							<p>Svijetlo će sunce sinut,</p>
							<p>Moj će se soko razbojnik</p>
							<p>Visoko k nebu vinut.</p>
							<p>Rumena ružo Lelijo,</p>
							<p>Daj da ti ljubim oči.</p>
							<p>Vrana mi hata osedlaj,</p>
							<p>Golem mi pehar toči,</p>
							<p>Te da projašim čaršijom</p>
							<p>I poviknem sijeda striku,</p>
							<p>Lelijo, neka i on zna</p>
							<p>Kada obiđoh diku!</p>
						</div>
							<label class="next-btn" for="c3">Sljedeća</label>
					</div>
						<div class="back1">
							<div class="center" id="text5">
								<h2>NOTTURNO</h2>
								<p>Dignuv na ruke ženu</p>
								<p>Mag je na stube stao,</p>
								<p>I na sjajno mu tijelo</p>
								<p>Srebren je ures pao.</p>
								<p>A lice mu bilo bijelo:</p>
								<p>Ko u snu gleda i sluša</p>
								<p>I kao stakleni val</p>
								<p>Roni se njegova duša.</p>
								<p>Zvijezde se roje visoko</p>
								<p>I dasi će sad da krenu,</p>
								<p>U zraku se kupa mjesec</p>
								<p>I sipa svjetlo i sjenu.</p>
								<p>A krasna se žena budi</p>
								<p>I grud joj otajno diše</p>
								<p>I svilne vjeđe obara</p>
								<p>I noć je i - biva tiše.</p>
							</div>
								<label class="back-btn" for="c3">Natrag</label>
						</div>
			</div>

			<div class="flip" id="p4">
				<div class="back1" >
					<div class="center" id="text7">
						<h2>PLAKAT</h2>
						<p>Kud pade snijeg bjelasaju se staze,</p>
						<p>Na hrdih stijenah bijele se i ginu.</p>
						<p>U snijegu stope. Blijed se ljulja mjesec</p>
						<p>U svijetlih krpah što po stijenah plinu.</p>
						<p>A podno stijenâ sjaji timor-šuma,</p>
						<p>I ledna, snježna, ruši se i sniva</p>
						<p>U plavet doli - gdje u staklu vodâ</p>
						<p>Tavna slika mitskog grada pliva.</p>
						<p>Ja vrač sa hridi slazim uklet, silan,</p>
						<p>I k mraznom srcu stištem cimbal snova;</p>
						<p>Po jasnom snijegu plave mi se stope,</p>
						<p>A sjen moj pada kao plašt bogova.</p>
					</div>
						<label class="back-btn" for="c4">Natrag</label>
				</div>	
					<div class="front">
						<div class="center" id="text6">
							<h2> GRIJEH </h2>
							<p>Ja vidim grijeh. Gle! gola, divlja hrid</p>
							<p>I oblak tavan, vihrom raskidan,</p>
							<p>A s hridi zublja. Krvav joj je žar,</p>
							<p>I pada u noć i u okean.</p>
							<p>U svjetlu zublje stoji djevojka,</p>
							<p>O prsi stište veo razderan,</p>
							<p>I groznu palu diže ko u snu,</p>
							<p>A pogled joj je tmast i užasan.</p>
							<p>Pred njom se svija svjež i krvav leš,</p>
							<p>Razgaljen, bijel - i gavran klikće vran,</p>
							<p>I negdje dal'ko zviždi oluja,</p>
							<p>Ko da se smije demon razuzdan.</p>
						</div>
							<label class="next-btn" for="c4">Sljedeća</label>
					</div>
			</div>

			<div class="flip" id="p5">
				<div class="back">
					<img src="..//Slike/VladimirVidrićZadnjaKorica.png">
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

	<script type = "text/javascript" src = "../JavaScript/JavaScriptPhP.js"></script>
</body>
</html>