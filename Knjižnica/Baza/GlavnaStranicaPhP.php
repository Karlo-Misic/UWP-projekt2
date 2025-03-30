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
<title>Knjižnica</title>
<link rel="stylesheet" href="..//Style/styleGlavnaStranicaPhP.css">
<meta name="description" content="Knjižnica">
<meta name="author" content="Karlo Mišić">
<link rel="icon" href="..//Slike/Icon.png">
</head>
<body class="background">

	<ul>
		<div class="alert" id="mydiv">DOBRODOŠLI!: <i><div id="alert"><?php echo $user_data['username']; ?></div></i></div>
		<p><a href="logout.php" class="logout">Odjava</a></p>
    </ul>
	<p><a href="UpdateProfilePhP.php" class="profile" title="Korisnički račun"></a></p>

    <div class="person">
		<a href="AntunBrankoŠimićPhP.php">	
			<div class="container">
		 		<div class="container-inner">
					<img class="circle"/>			
					<img class="img img1" src="..//Slike/AntunBrankoSimicPrednjaKorica.jpg"/>
		  		</div>
	    </a>
			</div>	
		<div class="divider"></div>
		<a href="AntunBrankoŠimićPhP.php"> <div class="name">Sabrane pjesme</div></a>
		<a href="AntunBrankoŠimićPhP.php"> <div class="title" title="Antun Branko Šimić"> &nbsp; &nbsp; Antun Branko Šimić &nbsp; &nbsp; &nbsp;</div></a>
	</div>

	<div class="person">
		<a href="VladimirVidrićPhP.php">
			<div class="container">
		  		<div class="container-inner">
					<img class="circle"/>
					<img class="img img2" src="..//Slike/VladimirVidrićPrednjaKorica.jpg"/>
		 		</div>
		</a>
			</div>
		<div class="divider"></div>
		<a  href="VladimirVidrićPhP.php"><div class="name">Pjesme</div></a>
		<a href="VladimirVidrićPhP.php"><div class="title" title="Vladimir Vidrić">&nbsp; &nbsp; &nbsp; Vladimir Vidrić &nbsp; &nbsp; &nbsp;</div></a>
	</div>

	<div class="person">
		<a href="AntunGustavMatošPhP.php">
			<div class="container">
			  	<div class="container-inner">
					<img class="circle"/>
					<img class="img img3" src="..//Slike/AntunGustavMatošPrednjaKorica.jpg"/>
			  	</div>
		</a>
			</div>
		<div class="divider"></div>
		<a href="AntunGustavMatošPhP.php"><div class="name">Pjesme</div></a>
		<a href="AntunGustavMatošPhP.php"><div class="title" title="Antun Gustav Matoš"> &nbsp; &nbsp; Antun Gustav Matoš &nbsp; &nbsp;</div></a>	
	</div>
	
    <div class="person1">
		<a href="TinUjevićPhP.php">	
			<div class="container">
		 		<div class="container-inner">
					<img class="circle"/>			
					<img class="img img1" src="..//Slike/TinUjevićPrednjaKorica.png"/>
		  		</div>
	    </a>
			</div>	
		<div class="divider"></div>
		<a href="TinUjevićPhP.php"> <div class="name">Pjesme</div></a>
		<a href="TinUjevićPhP.php"> <div class="title" title="Tin Ujević"> &nbsp; &nbsp; &nbsp; &nbsp; Tin &nbsp; Ujević &nbsp; &nbsp; &nbsp; &nbsp;</div></a>
	</div>

	<div class="person1">
		<a href="DragutinDomjanićPhP.php">
			<div class="container">
		  		<div class="container-inner">
					<img class="circle"/>
					<img class="img img2" src="..//Slike/DragutinDomjanićPrednjaKorica.jpg"/>
		 		</div>
		</a>
			</div>
		<div class="divider"></div>
		<a  href="DragutinDomjanićPhP.php"><div class="name">Po dragomu kraju</div></a>
		<a href="DragutinDomjanićPhP.php"><div class="title" title="Dragutin Domjanić"> &nbsp; &nbsp; Dragutin Domjanić &nbsp; &nbsp;</div></a>
	</div>

	<div class="person1">
		<a href="JankoPolićKamovPhP.php">
			<div class="container">
			  	<div class="container-inner">
					<img class="circle"/>
					<img class="img img3" src="..//Slike/JankoPolićKamovPrednjaKorica.jpg"/>
			  	</div>
		</a>
			</div>
		<div class="divider"></div>
		<a href="JankoPolićKamovPhP.php"><div class="name">Poezija</div></a>
		<a href="JankoPolićKamovPhP.php"><div class="title" title="Janko Polić Kamov"> &nbsp; &nbsp; Janko Polić Kamov &nbsp; &nbsp;</div></a>	
	</div>
	
	<script type ="text/javascript" src = "..//JavaScript/JavaScriptGlavnaStranicaPhP.js"></script>
</body>
</html>