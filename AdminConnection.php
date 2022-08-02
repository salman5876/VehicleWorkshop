

<?php
include_once('connection.php');


if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

//fetch data for complain from database
$complain = "SELECT * FROM complain";
$result_complain = mysqli_query($conn, $complain);



//fetch data for Appointment from database

$appointment = "SELECT * FROM `appointment` WHERE AppointmentDate >= curdate()";
$result_appointment = mysqli_query($conn, $appointment);




//fetch data for Appointment from database

$mechanic = "SELECT * FROM machanic";
$result_mechanic = mysqli_query($conn, $mechanic);


mysqli_close($conn);

?>



