
<?php
include_once('connection.php');
session_start();

$email = $_POST["s-email"];
$logPassword = $_POST["s-password"];

$_SESSION['email']=$email; 
$_SESSION['logPassword']= $logPassword; 



//session to display name on home page
$name_query = "SELECT * FROM `signup` WHERE Email LIKE '$email'";
$name_result = mysqli_query($conn,$name_query);
$row_name = mysqli_fetch_assoc($name_result);
$_SESSION['fname'] = $row_name['Fname'] ."&nbsp;".$row_name['Lname'];




if(mysqli_connect_errno()){
	echo "DataBase Not Connected";
	}

if(isset($_POST['s-button'])){
 
$query = "SELECT * FROM `signup` WHERE `Email` LIKE '$email' AND `Password` LIKE '$logPassword'";

	$run = mysqli_query($conn,$query);
	if(mysqli_num_rows($run) == 1){
		header("location: home.php");
	}
	
	else {
	
		$_SESSION['error']= "Incorrect Information";
		header("location: login.php");
	}
}

elseif(isset($_POST['as-button'])){

$query = "SELECT * FROM `adminlogin` WHERE `a-email` LIKE '$email' AND `a-password` LIKE '$logPassword'";

	$run = mysqli_query($conn,$query);
	if(mysqli_num_rows($run) == 1){
		
		header("location: admin.php");
		
	}
	else 
	{
	$_SESSION['error']= "Incorrect Information";
		header("location: login.php");
	}
}
mysqli_close($conn);


?>