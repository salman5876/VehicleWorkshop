

 <?php
session_start();

include_once('connection.php');

$email = $_POST["s_email"];
$sql = "SELECT * FROM signup where Email = '$email' ";
$result = mysqli_query($conn, $sql);
$chek = mysqli_num_rows($result);

if ($chek > 0) {
	echo " Email Already Exist*";
} 

if(isset($_POST["submit_s"])){

$fname = $_POST["s-fname"];
$lname = $_POST["s-lname"];
$number = $_POST["s-number"];
$gender = $_POST["s-gender"];
$sPassword = $_POST["s-password"];
$sCPassword = $_POST["s-Cpassword"];
$address = $_POST["s-address"];
$city = $_POST["s-city"];
$zip= $_POST["s-zip"];




if($sPassword != $sCPassword){
	$_SESSION['pass_match'] = "Password Doesn't Match";
	header("location: Sign-up.php");
}
elseif(strlen($sPassword) < 8){ 
	$_SESSION['pass_length'] = "Password Has Min 8 Characters";
	header("location: Sign-up.php");
	
}

else{
	
$query = "INSERT INTO `signup` (`Fname`, `Lname`, `Email`, `Pnumber`, `Gender`, `Password`, `Address`, `City`, `Zcode`) VALUES ( '$fname', '$lname', '$email', '$number', '$gender', '$sPassword', '$address', '$city', '
$zip')";
	
	mysqli_query($conn , $query);
	echo "drddg";
header("location: login.php");
}

}







?>