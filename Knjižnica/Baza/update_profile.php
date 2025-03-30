<?php
session_start();

include("connection.php");
include("functions.php");
$user_data = check_login($conn);

if(isset($_POST['update']))
{
    $user_data =$_POST['user_id'];
    $username = $_POST['username'];
    $password= $_POST['password'];
		$query = "UPDATE users SET username='$username',password='$password' WHERE user_id='$user_data'";
		$query_run = mysqli_query($conn,$query);

    if($query_run)
    {
      $_SESSION['status'] = "Azurirano";
      echo "<script>alert('USPJEŠNO AŽURIRANO!');window.location.href='UpdateProfilePhP.php';</script>";
     
    }
    else
    {
      $_SESSION['status'] = "Nije azurirano";
      echo "<script>alert('POKUŠAJ PONOVO!');window.location.href='UpdateProfilePhP.php';</script>";
    }
}
?>       
