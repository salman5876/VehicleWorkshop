<?php

include_once('connection.php');

extract($_POST);

$pkg= $_POST['pkg'];
$detail= $_POST['detail'];
$price= $_POST['price'];


$sql = "INSERT INTO `package`(`pkg`, `detail`, `price`) VALUES ('$pkg','$detail','$price')";
 mysqli_query($conn, $sql);







?>
