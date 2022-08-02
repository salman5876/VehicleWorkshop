
<?php
include_once('connection.php');
session_start();


$ap_fname = $_POST["ap-fname"];
$ap_lname = $_POST["ap-lname"];
$ap_email = $_POST["ap-email"];
$ap_number = $_POST["ap-number"];
$ap_problem = $_POST["ap-problem"];
$ap_shop = $_POST["ap-shop"];
$ap_date = $_POST["ap-date"];
$ap_time = $_POST["ap-time"];
$ap_address = $_POST["ap-address"];
$ap_city = $_POST["ap-city"];
$ap_zip= $_POST["ap-zip"];



$sql="SELECT * FROM `appointment` WHERE `Problem` LIKE '$ap_problem' AND `Workshop` LIKE '$ap_shop' AND `AppointmentDate` = '$ap_date' AND `AppointmentTime` = '$ap_time'";


$result = mysqli_query($conn , $sql);
$check = mysqli_num_rows($result);

if($check>0)
{

	
		$_SESSION['appointment_error'] = "Appointment already exisit";
		header("location: Appointment.php");
	
}



else
{
$query = "INSERT INTO `appointment` (`Fname`, `Lname`, `Email`, `Pnumber`, `Problem`, `Workshop`, `AppointmentDate`, `AppointmentTime`, `Address`, `City`, `Zip`) VALUES ( '$ap_fname', '$ap_lname', '$ap_email', '$ap_number', '$ap_problem', '$ap_shop', '$ap_date', '$ap_time', '$ap_address', '$ap_city', '$ap_zip');";

mysqli_query($conn , $query);
	
	{
	$_SESSION['Appoint_sucess'] = "Appointment Registered";
		header("location: home.php");
	}
}
	
mysqli_close($conn);
	
?>



