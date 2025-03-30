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
<link rel="stylesheet" href="..//Style/styleUpdateProfile.css">
<meta name="description" content="Knjižnica">
<meta name="author" content="Karlo Mišić">
<link rel="icon" href="..//Slike/Icon.png">
</head>
<body class="background">

<div class="div">

				<form method="POST" action="remove_profile.php">
                	<input type="hidden" name="user_id" value="<?php echo $user_data['user_id']; ?>">
					<button name="remove" class="removebtn" >Obriši profil</button>
				</form>

				<form method="POST"  action="update_profile.php">
					<div>
						<div>
							<h3 class="font" id="space">Trenutni podaci profila:</h3>
							<p class="image"></p>
							<div id="center" class="font1">
								<div>User_id: <i><?php echo $user_data['user_id']; ?></i></div>
								<div>Korisničko Ime: <i><?php echo $user_data['username']; ?></i></div>
								<div>Lozinka: <i><?php echo $user_data['password']; ?></i></div>
								</br>
								<div class="date">Datum promjene: <i><?php echo $user_data['date']; ?></i></div>	
							</div>
						        </br>
							<hr style="border-top:1px solid #000;"/>
							<h3 class="font" id="space">Ažuriraj profil:</h3>
							<div id="center" class="font1">
								<label class="label">Korisničko Ime:</label>
								<input type="hidden" name="user_id" value="<?php echo $user_data['user_id']; ?>" >
								<input class="input" maxlength="20" type="text" name="username" required="required" value="<?php echo $user_data['username']; ?>" oninput="this.value=this.value.replace(/[^a-zA-Z0-9-_]/g, '')">
							</div>
							<div id="center" class="font1">
								<label>Lozinka:</label>
								<input type="text" maxlength="20" name="password" required="required" value="<?php echo $user_data['password']; ?>" oninput="this.value=this.value.replace(/[^a-zA-Z0-9]/g, '')">
							</div>
						</div>
					</div>
					<br/>
					<div id="center">
						<a id="text" href="GlavnaStranicaPhP.php"><button name="close" class="closebtn">Odustani</a></button>
						<button name="update" class="updatebtn">Ažuriraj</button>
					</div>
				</form>
			</div>
		</div>
	</div>

</body>
</html>