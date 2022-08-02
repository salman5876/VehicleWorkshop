
<?php
include_once('connection.php');
session_start();


$C_fname = $_POST["c-fname"];
$C_lname = $_POST["c-lname"];
$C_email = $_POST["c-email"];
$C_address = $_POST["c-address"];
$C_complain = $_POST["c-complain"];



if(!$conn)
{
	 die("DataBase Connection Failed") .
		 mysqli_connect_error();
}
else
{
$query = "INSERT INTO `complain` (`Fname`, `Lname`, `Email`, `Address`, `CompForm`) VALUES ('$C_fname', '$C_lname', '$C_email', '$C_address', '$C_complain')";

mysqli_query($conn , $query);
	
	
	{
	$_SESSION['complain_register'] = "complain registerd sucessfully";
		header("location: home.php");
	}
}

mysqli_close($conn);




?>



