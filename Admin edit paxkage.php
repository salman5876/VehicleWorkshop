<?php


include_once('connection.php');

$data = stripslashes(file_get_contents("php://input"));
$mydata = json_decode($data,true);

$id= $mydata['sid'];




$edit_query = "SELECT * FROM `package` where Sno = '$id'";
 $result_edit = mysqli_query($conn, $edit_query);

$row_edit = mysqli_fetch_assoc($result_edit);

echo json_encode($row_edit);


?>
