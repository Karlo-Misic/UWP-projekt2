<?php 

session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//Nešto je POSTAN-O
		$username = $_POST['login'];
		$email = $_POST['login'];
		$password = $_POST['password'];

		if(!empty($email) && !empty($password) && !is_numeric($email)) 
		{
			//Čitaj iz baze podataka
			$query = "select * from users where email = '$email'  limit 1";
		}

		$result = mysqli_query($conn, $query);
     
		if($result)
		{
			if($result && mysqli_num_rows($result) > 0)
			{

				$user_data = mysqli_fetch_assoc($result);
				
				if($user_data['password'] === $password)
				{

					$_SESSION['user_id'] = $user_data['user_id'];
					header("Location:GlavnaStranicaPhP.php");
					die;
				}
			}
		}
		
		
		if(!empty($username) && !empty($password) && !is_numeric($username))
		{
			$query = "select * from users where username = '$username'  limit 1";
		}
			$result = mysqli_query($conn, $query);
     
			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location:GlavnaStranicaPhP.php");
						die;
					}
				}
			}			
			echo "<script>alert('KRIVO KORISNIČKO IME ILI LOZINKA!');window.location.href='..//HTML/GlavnaStranica.html';</script>";
	}
	

?>