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
<title>Tin Ujević</title>
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
						<h2>AKO ČEŽNJA ŽIVCA STREMI</h2>
						<h3>- Kolajna XXIV -</h3>
						<p>Ako čežnja živca stremi u taj vis</p>
						<p>bit će da mi sluti bijela snoviđenja,</p>
						<p>il da strava drugih svijetlih objavljenja</p>
						<p>kruni kao zora uzneseni klis.</p>
						<p>Uzalud izlanu: »Ja sain Bilitis«.</p>
						<p>Na nemirne čežnje i nestalna mnjenja</p>
						<p>što ih muči iskra ljuta nestrpljenja</p>
						<p>baca lažnu sjenku zagonetni Dis.</p>
						<p>I ja kumim tebe, udaljeno Selo,</p>
						<p>daj tmi mliječnu ljubav iz svježega jedra,</p>
						<p>vrati plaho srce ljubavno i bijelo.</p>
						<p>A kad mlada duša prerodi se vedra,</p>
						<p>grliti ću hridi i gorske košture</p>
						<p>kud plamene oči grozničavo zure.</p>
					</div>
						<label class="back-btn" for="c1">Natrag</label>
				</div>
						<div class="front">
							<img src="..//Slike/TinUjevićPrednjaKorica.png" >
							<label class="next-btnFrontPage" for="c1">Sljedeća</label>
						</div>
			</div>

			<div class="flip" id="p2">
				<div class="back1">
					<div class="center" id="text3">
						<h2>BITI DJECA</h2>
						<p>Uhapšen u svojoj magli,</p>
						<p>zakopčan u svojem mraku,</p>
						<p>svako svojoj zvijezdi nagli,</p>
						<p>svojoj ruži, svojem maku.</p>
						<p>I svak žudi svetkovine</p>
						<p>djetinjastih blagostanja,</p>
						<p>sretne mrene i dubine</p>
						<p>nevinosti i neznanja.</p>
						<p>I na oblak koji tišti,</p>
						<p>i na munju koja prijeti,</p>
						<p>naša blaga Nada vrišti;</p>
						<p>Biti čisti. Biti sveti.</p>
						<p>I kad nema Našeg Duha</p>
						<p>među nama jednog sveca,</p>
						<p>treba i bez bijela ruha</p>
						<p>biti djeca, biti djeca.</p>
					</div>
						<label class="back-btn" for="c2">Natrag</label>
				</div>
						<div class="front">
							<div class="center" id="text2">
								<h2>BOŽANSKA ŽENO</h2>
								<p>Božanska ženo, gospo nepoznata,</p>
								<p>dokle, i kamo, mene misliš vući?</p>
								<p>Hora je došla te ja moram tući</p>
								<p>zlatnim zvekirom na bešćutna vrata.</p>
								<p>	Od tvojih čari i od bljeska zlata,</p>
								<p>od dvora strepim kuda imam ući,</p>
								<p>	a krto srce moralo bi pući</p>
								<p>	bez tvog osmješka, besmrtna beata.</p>
								<p>	Dok sjaju sunca i blijedi mjeseci,</p>
								<p>	snatrim o zmaju ispred tvoga praga</p>
								<p>	i zlatnom klasju u toj mekoj kosi.</p>
								<p>	I preklinjem te: Nepoznata, reci,</p>
								<p>	kakva te tuga iz daljine draga,</p>
								<p>	i još mi reci, gdje si, što si, ko si?</p>
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
							<h2>IGRAČKA VJETROVA</h2>
							<p>Pati bez suza, zivi bez psovke,</p>
							<p>i budi mirno nesretan.</p>
							<p>Taste su suze, a jadikovke</p>
							<p>ublazit nece gorki san.</p>
							<p>Podaj se pjanom vjetru zivota,</p>
							<p>pa nek te vije bilo kud,</p>
							<p>pusti ko listak neka te mota</p>
							<p>u ludi polet vihor lud.</p>
							<p>Leti ko lisce sto vir ga vije</p>
							<p>za let si duso, stvorena.</p>
							<p>Za zemlju nije, za pokoj nije</p>
							<p>cvijet sto nema korijena.</p>
						</div>
							<label class="next-btn" for="c3">Sljedeća</label>
					</div>
							<div class="back1">
								<div class="center" id="text5">
									<h2>JER TI SI S DRUGE STRANE SVIJETA</h2>
									<p>Jer ti si došla s druge strane svijeta</p>
									<p>preko strahota sinjeg akeana;</p>
									<p>Dva naša srca, dva sljubljena cvijeta,</p>
									<p>grle se preko glave Levjatana.</p>
									<p>Kroz onaj ritam, ljubav vaseljene,</p>
									<p>i muziku što vlada plave sfere,</p>
									<p>kroz našu dušu, i tebe i mene,</p>
									<p>grle se bijesno do dvije hemisfere.</p>
									<p>Sa sjajem krina i sa rozmarinom</p>
									<p>da četvrt sata ti si došla kašnje,</p>
									<p>odar bi našla. Svojom sad bjelinom</p>
									<p>vrati mi moje srce Nekadašnje.</p>
								</div>
									<label class="back-btn" for="c3">Natrag</label>
							</div>
			</div>

			<div class="flip" id="p4">
				<div class="back1" >
					<div class="center" id="text7">
						<h2>MENI BEZ MANE</h2>
						<p>Ure od smole cure besmisleno,</p>
						<p>sumorni čovjek snatri bestjelesno,</p>
						<p>sutonska strast se boji bezimeno,</p>
						<p>a ljubav jeca, jeca bespredmetno;</p>
						<p>I sve je danas prazno beskonačno,</p>
						<p>a vjetar duva, duva bezutješno</p>
						<p>na gole duše koje neprestano</p>
						<p>ištu i grle beznadno, beskrajno.</p>
					</div>
					<label class="back-btn" for="c4">Natrag</label>
				</div>
					<div class="front">
						<div class="center" id="text6">
							<h2>ODLAZAK</h2>
							<p>U slutnji, u čežnji daljine, daljine;</p>
							<p>U srcu, u dahu planine, planine.</p>
							<p>Malena mjesta srca moga,</p>
							<p>spomenak Brača, Imotskoga.</p>
							<p>I blijesak slavna šestopera,</p>
							<p>i miris (miris) kalopera.</p>
							<p>Tamo, tamo da putujem,</p>
							<p>tamo, tamo da tugujem;</p>
							<p>Da čujem one stare basne,</p>
							<p>da mlijeko plave bajke sasnem;</p>
							<p>Da više ne znam sebe sama,</p>
							<p>ni dima bola u maglama.</p>
						</div>
							<label class="next-btn" for="c4">Sljedeća</label>
					</div>
				</div>

			<div class="flip" id="p5">
				<div class="back">
					<img src="..//Slike/TinUjevićZadnjaKorica.png">
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