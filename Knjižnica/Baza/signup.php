<?php
session_start();
include("connection.php");
include("functions.php");

if($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['username']) && isset($_POST['password']) &&
        isset($_POST['gender']) && isset($_POST['email']) &&
        isset($_POST['phoneCode']) && isset($_POST['phone'])) {
        
        $username = $_POST['username'];
        $password = $_POST['password'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $phoneCode = $_POST['phoneCode'];
        $phone = $_POST['phone'];

        $dbhost = "localhost";
		$dbuser = "root";
		$dbpass = "";
		$dbname = "library";

		if(!$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
		{   
			die("Spajanje nije uspjelo!");
		}

		else
		{
			// echo "Uspješno spajanje!";
            
			$user_id = random_num(2);
            $Select = "SELECT email FROM users WHERE email = ? LIMIT 1";
            $Select = "SELECT username FROM users WHERE username = ? LIMIT 1";
            $Insert = "INSERT INTO users (user_id,username, password, gender, email, phoneCode, phone) values ('$user_id',?, ?, ?, ?, ?, ?)";

            $stmt = $conn->prepare($Select);
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $stmt->bind_result($resultEmail);
            $stmt->store_result();
            $stmt->fetch();
            $rnum = $stmt->num_rows;

            $stmt = $conn->prepare($Select);
            $stmt->bind_param("s", $username);
            $stmt->execute();
            $stmt->bind_result($resultUsername);
            $stmt->store_result();
            $stmt->fetch();
            $rnum = $stmt->num_rows;

            if ($rnum == 0) {
                $stmt->close();

                $stmt = $conn->prepare($Insert);
				$stmt->bind_param("ssssss",$username, $password, $gender, $email, $phoneCode, $phone);
                if ($stmt->execute()) {
					echo "<script>alert('USPJEŠNA REGISTRACIJA');window.location.href='..//HTML/GlavnaStranica.html';</script>";
                }
                else {
                    echo $stmt->error;
                }
            }
            else {
				echo "<script>alert('IME/EMAIL JE VEĆ REGISTRIRAN NA OVOJ STRANICI!');window.location.href='..//HTML/GlavnaStranica.html';</script>";
            }
            $stmt->close();
            $conn->close();
        }
    }
    else {
        echo "<script>alert('POTREBNO JE ISPUNITI SVA POLJA!');window.location.href='..//HTML/GlavnaStranica.html';</script>";
        die();
    }
}
else {
	echo "<script>alert('SUBMIT DUGME NIJE POSTAVLJENO!');window.location.href='..//HTML/GlavnaStranica.html';</script>";
}
?>