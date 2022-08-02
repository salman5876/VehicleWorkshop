<?php


include_once('connection.php');

extract($_POST);

$deleteSno= $_POST['deleteSno'];

if(isset($deleteSno)){
	
	

$delete_query = "DELETE FROM `package` where Sno = '$deleteSno'";
 mysqli_query($conn, $delete_query);

}







?>
