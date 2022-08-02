	<?php
	session_start();
if(isset($_POST['signout'])){
session_destroy();
	$_SESSION['email'];
	$_SESSION['logPassword'];
	$_SESSION['fname'];
header("Location: login.php");
exit();
}
?>
