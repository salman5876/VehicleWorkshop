<?php

include_once('connection.php');

extract($_POST);



	$hide_id = $_POST['hide_id'];
	$pkg1= $_POST['pkg1'];
	$detail1= $_POST['detail1'];
	$price1= $_POST['price1'];
	
	$edit_query = "UPDATE `package` SET `pkg`='$pkg1' ,`detail`='$detail1',`price`='$price1' where Sno = '$hide_id'";
 mysqli_query($conn, $edit_query);







?>
