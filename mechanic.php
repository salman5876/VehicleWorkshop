 <?php
session_start();
if(isset($_SESSION['logPassword'])){
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mechanic </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	
<link href="font_Footer.css" rel="stylesheet" type="text/css">
  </head>
	
	<nav class="navbar navbar-expand-lg bg-light p-3 ">
  <div class="container-fluid">
    <div  class="navbar-brand" >
	  	   <img class="d-block img-fluid" src="logo/main logo.png"  width="120" height="80"  alt=" logo">
	  </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link  nav1" aria-current="page" href="home.php">Home</a>
        </li>
		  <li class="nav-item ">
         <a class="nav-link active nav1" href="mechanic.php">Mechanic</a>
        </li>
        <li class="nav-item">
        <a class="nav-link nav1" href="Appointment.php">Appointment</a>
        </li>
		  <li class="nav-item">
          <a class="nav-link nav1" href="complain.php">Complain</a>
        </li>
		   <li class="nav-item">
         <a href="About Us.php " class="nav-link nav1">About Us</a>
       		   </li>
	
      </ul>
          <?php if ( isset( $_SESSION['fname'])){ ?>
		<div class="fname nav1" >Hi!&nbsp;<?php echo $_SESSION['fname'];?> &nbsp; </div>
		<?php } ?><link href="font_Footer.css" rel="stylesheet" type="text/css">
	<form action="session destroy.php" method="post">
     
      <button class="btn btn-warning m-2" type="submit" id="signout" name="signout">Log Out</button>
       </form>
    </div>
  </div>
</nav>	
  
	
  <body>
	<div class="container">
		<br>
		<h1>Book a Mechanic </h1><br>
		
<form class="row g-3" method="post" action="MechanicConnection.php">
	
  <div class="col-md-6">
	  
    <label for="f-name" class="form-label">First Name</label>
    <input type="text" class="form-control" id="m-fname" name="m-fname" placeholder="First Name" required>
	  
  </div>

	<div class="col-md-6">
		 <label for="l-name" class="form-label">Last Name</label>
    <input type="text" class="form-control" id="m-lname" name="m-lname" placeholder="Last Name" required>
  </div>
	
 
		<div class="col-md-6">
    <label for="Email" class="form-label">Email</label>
    <input type="email" class="form-control" id="m-email"   name="m-email" required placeholder="salmanahmed123@gmail.com">
  </div>
<div class="col-6">
    <label for="inputAddress" class="form-label">Phone Number</label>
    <input type="text" class="form-control" id="m-Pnumber" name="m-Pnumber" placeholder="03XX-XXXXX" required>
  </div>
	
	<div class="col-md-6">
    <label  class="form-label">Choose Vehicle</label>
    <select id="ap-shop" name="m-vehicle" class="form-select" required>
      <option selected>Choose </option>
      <option>Car</option>
      <option>bike </option>
      <option>truck</option>
      <option>rikshaw</option>
      
     
    </select>
  </div>
 <div class="col-md-6">
    <label  class="form-label">Choose Problem</label>
    <select id="m-problem" name="m-problem" class="form-select" required>
      <option selected>Choose </option>
      <option>Car Wash</option>
      <option>A/C or Heater</option>
      <option>A/C or Heater</option>
      <option>Battery Problem</option>
      <option>Brakes Problem</option>
      <option>Alignment Problem</option>
      <option>Overheating Problem</option>
      <option>Cracked Windshield</option>
      
    </select>
  </div>
	
	
	
	<div class="col-12">
    <label for="inputAddress" class="form-label">Current Location</label>
    <input type="text" class="form-control" id="m-location" name="m-location" placeholder="Enter current location" required>
  </div>
	
	
	<div class="col-12">
    <label for="inputAddress" class="form-label">Problems Detail</label>
    <textarea type="text" class="form-control" id="m-detail" rows="5" name="m-detail" placeholder="Write your problem here"> </textarea> 
  </div>
	

  <div class="col-12">
    <button class="btn btn-primary">Book Mechanic</button>
  </div>
</form>  
 
 	</div>  
	  
	    
   
	  

	
	  <div class="container">
  <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
	  <br>
    <p style="padding-left: 441px; position: absolute;">© 2022 WORKSHOP. All Rights Reserved.</p>
   
   
  </footer>

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

