<?php
session_start();
include_once('AdminConnection.php');
if(isset($_SESSION['logPassword'])){

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Admin </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
 
	  <style>
	 
	  hr {
  border-top: 3px solid black;
}
	  </style>
	  <link href="font_Footer.css" rel="stylesheet" type="text/css">
  </head>
	
	
  <body>
	  
	 <nav class="navbar navbar-expand-lg bg-light p-3 ">
  <div class="container-fluid">
    <div  class="navbar-brand" >
<h3> Admin Page!</h3>
	  </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      
			  <li class="nav-item">
          <a class="nav-link active" href="admin.php">Home</a>
        </li>
		   <li class="nav-item">
          <a href="Admin packges display.php" class="nav-link ">Packages</a>
       		   </li>
      </ul>
<?php if ( isset( $_SESSION['fname'])){ ?>
		<div class="fname nav1" >Hi!&nbsp;<?php echo $_SESSION['fname'];?> &nbsp; </div>
		<?php } ?>
	<form action="session destroy.php" method="post">
     
      <button class="btn btn-warning m-2" type="submit" id="signout" name="signout">Log Out</button>
       </form>
    </div>
  </div>
</nav>	
	  
	  <div class="container">
	  <br>
	 <h3>Complains</h3>
  	<br>
<!--	<table class="table table-hover table-bordered border-primary">-->
		  <div class="table-responsive">
	<table class="table table-hover table-bordered">
      <tr>
		   <thead class="table-light">	
      <th scope="col">Sno.</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
      <th scope="col">Address</th>
      <th scope="col">Complain</th>
			   </thead>
    </tr>
 
<?php $sno=0; while($row_complain = mysqli_fetch_assoc($result_complain)) { $sno = $sno +1 ;?>
		

    <tr>
      
      <td><?php echo $sno;?></td>
      <td><?php echo $row_complain['Fname'];?></td>
      <td><?php echo $row_complain['Lname'];?></td>
      <td><?php echo $row_complain['Email'];?></td>
      <td><?php echo $row_complain['Address'];?></td>
      <td><?php echo $row_complain['CompForm'];?></td>
      
    </tr>
<?php } 
		
		 ?>
</table>
	</div>
	
		  

  
		  
		  
		  
	   <br>
		  <hr>
	 <h3>Appointments</h3>
		  
	  <br>
	 
		  <div class="table-responsive">
	<table class="table table-hover table-bordered ">
      <tr>
		   <thead class="table-light">	
      <th scope="col">Sno.</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Appointment Date</th>
      <th scope="col">Appointment Time</th>
      <th scope="col">Problem</th>
      <th scope="col">Workshop</th>
      <th scope="col">Address</th>
      <th scope="col">City </th>
      <th scope="col">Zip </th>
			   
			   </thead>
    </tr>

<?php $sno=0; while($row_appointment = mysqli_fetch_assoc($result_appointment))  { $sno = $sno +1?>
   
		<tr>
      <td><?php echo $sno; ?></td>
      <td><?php echo $row_appointment['Fname'];?></td>
      <td><?php echo $row_appointment['Lname'];?></td>
      <td><?php echo $row_appointment['Email'];?></td>
      <td><?php echo $row_appointment['Pnumber'];?></td>
      <td><?php echo $row_appointment['AppointmentDate'];?></td>
      <td><?php echo $row_appointment['AppointmentTime'];?></td>
      <td><?php echo $row_appointment['Problem'];?></td>
      <td><?php echo $row_appointment['Workshop'];?></td>
      <td><?php echo $row_appointment['Address'];?></td>
      <td><?php echo $row_appointment['City'];?></td>
      <td><?php echo $row_appointment['Zip'];?></td>
     
    
    </tr>
<?php } ?>   
</table>
	</div>
	
		
	
	  
	   <br>
		  <hr>
	 <h3>Mechanic </h3>
	  <br>
	

	    <div class="table-responsive">
	<table class="table table-hover table-bordered ">
      <tr>
		   <thead class="table-light">	
      <th scope="col">Sno.</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Vehicle Type</th>
	  <th scope="col">Problem</th>
      <th scope="col">Current Location</th>
      <th scope="col">Detailed problem </th>
      			   
			   </thead>
    </tr>
 
<?php $sno=0;while($row_mechanic = mysqli_fetch_assoc($result_mechanic)) { $sno = $sno +1?>
 

    <tr>
      
      <td><?php echo $sno;?></td>
      <td><?php echo $row_mechanic['Fname'];?></td>
      <td><?php echo $row_mechanic['Lname'];?></td>
      <td><?php echo $row_mechanic['Email'];?></td>
      <td><?php echo $row_mechanic['Pnumber'];?></td>
      <td><?php echo $row_mechanic['Choose a vehicle'];?></td>
      <td><?php echo $row_mechanic['Choose a Problem'];?></td>
      <td><?php echo $row_mechanic['Current Location'];?></td>
      <td><?php echo $row_mechanic['Problem Detail'];?></td>
      
     
      
    </tr>
<?php } ?>
</table>
	</div>
	</div>
	   
	  
	  
	  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>
<?php
	}
else{
	header("location: login.php");
}
?>	
