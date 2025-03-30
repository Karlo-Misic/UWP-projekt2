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
<title>Antun Branko Šimić</title>
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
						<h2>MLADIĆ</h2>
						<p>Ja poznam bol mladića</p>
						<p>koji pobjednički pjev iz svoga izmučenog srca</p>
						<p>u jutro pjeva</p>
						<p>sa željom da sva srca s njegovim zatrepte</p>
						<p>i da se osluškujući glave prignu</p>
						<p>u ćutanje i slatki zaborav</p>
						<p>Al pjev mladića nečuven od ljudi</p>
						<p>padne natrag</p>
						<p>u njegovu ćutljivu samoću</p>
						<p>Ja poznam očaj blijed i bolesno zelenkast</p>
						<p>s pogledom u prazna lica ljudi u sivomu zraku</p>
						<p>i sa strahom ispred crnog bezdana u duši</p>
						<p>Ja poznam ponos mrk i tvrd</p>
						<p>sa smjelim uspravljenim korakom što gazi</p>
						<p>i s uhom koje iznutra</p>
						<p>glas svoga Boga sluša</p>
					</div>
						<label class="back-btn" for="c1">Natrag</label>
				</div>
						<div class="front">
							<img src="..//Slike/AntunBrankoSimicPrednjaKorica.jpg" >
							<label class="next-btnFrontPage" for="c1">Sljedeća</label>
						</div>
			</div>

			<div class="flip" id="p2">
				<div class="back1">
					<div class="center" id="text3">
						<h2>MUČENIK</h2>
						<p>Iz gomile istupih</p>
						<p>sam</p>
						<p>i pozvah vas u zemlju:</p>
						<p>Novi Život</p>
						<p>Smijeh ruga samo jeknu</p>
						<p>iz gomile</p>
						<p>k mojem uhu</p>
						<p>Pođoh sam</p>
						<p>Al za mnom ravno uputiste Smrt</p>
						<p>Umrijeh</p>
						<p>Iz moga srca izniknuše</p>
						<p>dva modra cvijeta ljubavi</p>
						<p>u svijet </p>
					</div>
						<label class="back-btn" for="c2">Natrag</label>
				</div>
						<div class="front">
							<div class="center" id="text2">
								<h2>ZAVEDENA</h2>
								<p>Ne, njega nema više. Pobjego je. Vrata</p>
								<p>	na kući dolje glasno zalupila</p>
								<p>ko zadnji put</p>
								<p>Da letim za njim niza stepenice?</p>
								<p>Ukočila se, stojim</p>
								<p>Na podu zgažen cvijet</p>
								<p>Kroz prozor</p>
								<p>crvene se zvijezde glasno smiju</p>
								<p>Ja zovnem u noć iz svih snaga</p>
								<p>Na prozoru staklo se zatrese</p>
								<p>i smiri</p>
								<p>U noći</p>
								<p>kamenito srce grada ćuti</p>
								<p>Moje golo tijelo dršće</p>
								<p>obliveno ladnim svjetlom zvijezda</p>
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
							<h2>GORENJE</h2>
							<p> Niz zapadno nebo</p>
							<p>	i iz rasprsnutih šipaka u vrtu</p>
							<p>	krv se cijedi</p>
							<p>	Al s istoka se veče javi plavim licem</p>
							<p>	i zapad biva bljeđi, crveniji šipci</p>
							<p>	Ti bježiš k meni</p>
							<p>preplašena od grana u mraku</p>
							<p>i ćutiš</p>
							<p>Zašto ti je tijelo odjedanput plamen?</p>
							<p>O kako šipci prskaju</p>
							<p>i s nama gore!</p>
							<p>Ni zvijezde neće da se jave</p>
							<p>da jače bude ovo nijemo gorenje u vrtu</p>
						</div>
							<label class="next-btn" for="c3">Sljedeća</label>
					</div>
							<div class="back1">
								<div class="center" id="text5">
									<h2>POVRATAK</h2>
									<p>Ti i ne slutiš</p>
									<p>moj povratak i moju blizinu</p>
									<p>U noći kada šumi u tvom uhu tiha mjesečina</p>
									<p>znaj:</p>
									<p>ne koraca mjesečina oko tvoje kuće</p>
									<p>Ja lutam plavim stazama u tvojem vrtu</p>
									<p>Kad koracajući cestom kroz mrtvo svijetlo podne</p>
									<p>staneš</p>
									<p>preplašena krikom čudne tice</p>
									<p>znaj:</p>
									<p>to krik je moga srca s blizih obala</p>
									<p>I kad kroz suton vidiš crnu sjenku što se miče</p>
									<p>s onu stranu mrke mirne vode</p>
									<p>znaj:</p>
									<p>ja koracam uspravan i svečan</p>
									<p>kao pored tebe </p>
								</div>
									<label class="back-btn" for="c3">Natrag</label>
							</div>
			</div>

			<div class="flip" id="p4">
				<div class="back1" >
					<div class="center" id="text7">
						<h2>LJUBOMORA</h2>
						<p>Nad snježnom zemljom</p>
						<p>plave zvijezde</p>
						<p>Tvoja kuća stoji na kraj šume</p>
						<p>Ja idem k Tebi</p>
						<p>Da me kakav vuk ne napadne iz tame?</p>
						<p>Tiho šušti snijeg pod mojim koracima</p>
						<p>Tu sam!</p>
						<p>Tvoja kuća stoji ograđena</p>
						<p>Sva su okna zastrta</p>
						<p>Pred vratima ne videći mene</p>
						<p>straži pas</p>
						<p>Samo jedan prozor crven gori</p>
						<p>Ja znadem sve</p>
						<p>i idem natrag</p>
						<p>mrtav</p>
						<p>i u licu bijel kao snijeg</p>
					</div>
					<label class="back-btn" for="c4">Natrag</label>
				</div>
					<div class="front">
						<div class="center" id="text6">
							<h2> PRENUĆE </h2>
							<p> U noći mene prene iz tvrdoga sna </p>
							<p>bijela svjetlost lijući se kroz moj prozor </p>
							<p>Ja znadem: s dalekoga neba sjaju </p>
							<p>u moju sobu gola tijela žena </p>
							<p>I klečeći na prostrtomu plaštu plave mjesečine </p>
							<p>molim nijem iz nijeme noći </p>
							<p>tijelima nevidljivih nebeskih boginja  </p>
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