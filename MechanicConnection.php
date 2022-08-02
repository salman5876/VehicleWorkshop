
<?php
include_once('connection.php');
session_start();


$m_fname = $_POST["m-fname"];
$m_lname = $_POST["m-lname"];
$m_email = $_POST["m-email"];
$m_Pnumber = $_POST["m-Pnumber"];
$m_vehicl = $_POST["m-vehicle"];
$m_problem = $_POST["m-problem"];
$m_location = $_POST["m-location"];
$m_detail = $_POST["m-detail"];



if(!$conn)
{
	 die("DataBase Connection Failed") .
		 mysqli_connect_error();
}
else

$query = "INSERT INTO `machanic`(`Fname`, `Lname`, `Email`, `Pnumber`, `Choose a vehicle`, `Choose a Problem`, `Current Location`, `Problem Detail`) VALUES ('$m_fname','$m_lname','$m_email','$m_Pnumber','$m_vehicl','$m_problem','$m_location','$m_detail')";

mysqli_query($conn , $query);
	
	
	{
	$_SESSION['mechanic_booked'] = "Your Mechanic Has Been Booked";
		header("location: home.php");
	}
mysqli_close($conn);

?>



