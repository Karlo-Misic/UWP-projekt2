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
<title>Antun Gustav Matoš</title>
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
							<h2>1909</h2>
							<p>Na vješalima. Suha kao prut.</p>
							<p>Na uzničkome zidu. Zidu srama.</p>
							<p>Pod njome crna zločinačka jama.</p>
							<p>Ubijstva mjesto tamno kao blud.</p>
							<p>Ja vidjeh negdje ladanjski taj skut,</p>
							<p>Jer takvo lice ima moja mama,</p>
							<p>A slične oči neka krasna dama:</p>
							<p>Na lijepo mjesto zaveo me put!</p>
							<p>I mjesto nje u kobnu rupu skočih</p>
							<p>I krvavim si njenim znojem smočih</p>
							<p>Moj drski obraz, kao suzama.</p>
							<p>Jer Hrvatsku mi moju objesiše,</p>
							<p>Ko lopova, dok njeno ime briše,</p>
							<p>Za volju ne znam kome, žbir u uzama!</p>
						</div>
							<label class="back-btn" for="c1">Natrag</label>
					</div>

					<div class="front">
						<img src="..//Slike/AntunGustavMatošPrednjaKorica.jpg">
						<label class="next-btnFrontPage" for="c1">Sljedeća</label>
					</div>
				</div>

				<div class="flip" id="p2">
					<div class="back1">
						<div class="center" id="text3">
							<h2>19. SVIBNJA 1907.</h2>
							<p>Ko Petrarca Loru jutros sam te snio</p>
							<p>U okviru drevnom pobožnog portala,</p>
							<p>Zastava ti đačka iznad glave sjala,</p>
							<p>O, to nije sanak, ludi sanak bio!</p>
							<p>Prognanik, u pučkoj rulji sam se skrio,</p>
							<p>Suza mi je krišom na rukave pala,</p>
							<p>Kad su grička zvona od sreće zaplakala</p>
							<p>I studentski barjak s kalpakom se vio.</p>
							<p>Ti u crkvi, ja — ko prosjak kunjah vani,</p>
							<p>Jer me svaki pandur mogo uhvatiti...</p>
							<p>Ko četrdes'tosme grozni su nam dani!</p>
							<p>Slobodan je Hrvat sve to teže biti,</p>
							<p>Zato tužan lunja tuđim tlom bez puta,</p>
							<p>Kao zvuk od zvona kad kroz šumu luta.</p>
						</div>
							<label class="back-btn" for="c2">Natrag</label>
					</div>

 					<div class="front">
						<div class="center" id="text2">
							<h2>BASNA</h2>
							<p>Sva se perad sakupila na prelo:</p>
							<p>Susjed lisac trijebi naciju!</p>
							<p>Zaključiše poslati mu smjelo</p>
							<p>— Kao uvijek — deputaciju.</p>	
							<p>Zastupnici ostaviše selo,</p>
							<p>Sastaviše delegaciju,</p>
							<p>Državniku stigoše na sijelo,</p>
							<p>Predaše mu deklaraciju.</p>
							<p>Majstor — kao uvijek — družinu</p>
							<p>Zakolje i spremi užinu</p>
							<p>Sve bez zbora i bez dogovora,</p>	
							<p>Dok je sabor konstatirao,</p>
							<p>Da se komšija blamirao</p>
							<p>Kršeć jasni smisô ugovora.</p>
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
						<h2>ČUVAR</h2>
						<p>Jer drevna kletva tišti dimnjak taj,</p>
						<p>U rodu nije nitko više jak,</p>
						<p>Ugasio se davno svaki sjaj,</p>
						<p>Na praznom nebu očajanja znak;</p>	
						<p>Već davno vile ostaviše gaj,</p>
						<p>Umočvaren je strahom kužni zrak,</p>
						<p>	Oltari pusti kunu jalov maj,</p>
						<p>	Na duši i zemlji zijeva vampir mrak.</p>	
						<p>	Kroz nijemu noć tek jedan budan glas</p>
						<p>	Na lopovića pazi podli trag,</p>
						<p>	I plašeć tamu brani sveti prag.</p>	
						<p>	Oj dome! Kad te ostaviše svi,</p>
						<p>	U tmini, kojom kinje slabi sni,</p>
						<p>	Napustio te nije samo pas.</p>
					</div>
					<label class="next-btn" for="c3">Sljedeća</label>
				</div>

				<div class="back1">
					<div class="center" id="text5">
						<h2>ČAROBNA FRULA</h2>
						<p>Odvajkada na duši mojoj svira</p>
						<p>Muzikant satir, golać, parija,</p>
						<p>Pa kada svira, ko iz glasovira</p>
						<p>Utopija se diže, san, Ikarija.</p>		
						<p>O kako skladno žicu srca dira</p>
						<p>Taj duh sa mržnjom svih barbarija!</p>
						<p>Ko rujni zanos orgijskog putira</p>
						<p>Do prekogroblja klikće zlatna arija.</p>		
						<p>Zatvori oči, glavicu nasloni</p>
						<p>Na moja prsa, slatko dijete, tako,</p>
						<p>I slušaj srce, gdje u ritmu zvoni</p>		
						<p>Naš lijepi roman burno i polako.</p>
						<p>Zatvori oči! Već je došo Orfej,</p>
						<p>A za njim mak u cvijetu, ljubav, Morfej.</p>
					</div>
						<label class="back-btn" for="c3">Natrag</label>
				</div>
			</div>

			<div class="flip" id="p4">
				<div class="back1" >
					<div class="center" id="text7">
						<h2>DJEVOJČICI MJESTO IGRAČKE</h2>
						<p>Ljerko, srce moje, ti si lutka mala,</p>
						<p>Pa ne slutiš smisla žalosnih soneta;</p>
						<p>Kesteni pred kućom duhu tvom su meta.</p>
						<p>Još je deset karnevala do tvog bala.</p>			
						<p>Ti se čudiš dušo. Smijat si se stala</p>
						<p>Ovoj ludoj priči. Tvoja duša sveta</p>
						<p>Još ne sniva, kako zbore zrela ljeta.</p>
						<p>Gledaš me ko grla. Misliš — to je šala.</p>			
						<p>Al će doći veče, kad ćeš, ko Elvira,</p>
						<p>Don Huanâ sita i lažnih kavalira,</p>
						<p>Sjetiti se sjetno nježne ove strofe.</p>			
						<p>Moje će ti ime šapnut moja muza,</p>
						<p>A u modrom oku jecati će suza</p>
						<p>Ko za mrtvim clownom iza katastrofe.</p>
					</div>
						<label class="back-btn" for="c4">Natrag</label>
				</div>
		
				<div class="front">
					<div class="center" id="text6">
						<h2>LABUD</h2>
						<p>Pan i satir slušaju tišinu,</p>
						<p>Dijanin korak steže mramor mlak,</p>
						<p>Topola šušnu vrbi, zrak je blag,</p>
						<p>Polusjajne tajne plinu u visinu.</p>
						<p>Samo oči bdiju. Kroz daljinu</p>
						<p>Života traže srodnog vidljiv trag,</p>
						<p>Al ćuti trska. Oblak snuje. Mrak</p>
						<p>Muklim muči mukom. Mjesec sinu.</p>
						<p>I tisijem sjajem vala, tamo amo,</p>
						<p>Ko duvak, duh il mjesečine gruda</p>
						<p>Zanesen labud kruži amo tamo.</p>
						<p>Za njime zlatna šajka bajke, čuda,</p>
						<p>I slatka dama, golog boga čedo,</p>
						<p>Pa širi rosno krilo. O, Ledo, divna Ledo!</p>
					</div>
						<label class="next-btn" for="c4">Sljedeća</label>
				</div>
			</div>

			<div class="flip" id="p5">
				<div class="back">
					<img src="..//Slike/AntunGustavMatošZadnjaKorica.png">
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