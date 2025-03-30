<?php
session_start();

include("connection.php");
include("functions.php");
$user_data = check_login($conn);

if(isset($_POST['remove']))
{
    $user_data =$_POST['user_id'];
		$query = "DELETE FROM users WHERE user_id='$user_data'";
		$query_run = mysqli_query($conn,$query);

    if($query_run)
    {
      $_SESSION['status'] = "Izbrisano";
      echo "<script>alert('PROFIL IZBRISAN!');window.location.href='..//HTML/GlavnaStranica.html';</script>";
     
    }
    else
    {
      $_SESSION['status'] = "Nije izbrisano";
      echo "<script>alert('POKUŠAJ PONOVO!');window.location.href='UpdateProfilePhP.php';</script>";
    }
}
?>