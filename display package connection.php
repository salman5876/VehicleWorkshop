	<?php
include_once('connection.php');

if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$pkg_display = "SELECT * FROM `package`";
$result_pkg_display = mysqli_query($conn, $pkg_display);


	

?>

