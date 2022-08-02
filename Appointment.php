<?php
session_start();
if(isset($_SESSION['logPassword'])){
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Appointment</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	  <link href="font_Footer.css" rel="stylesheet" type="text/css">
  </head>
  <body>

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
         <a class="nav-link  nav1" href="mechanic.php">Mechanic</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active nav1" href="Appointment.php">Appointment</a>
        </li>
		  <li class="nav-item">
          <a class="nav-link nav1" href="complain.php">Complain</a>
        </li>
		   <li class="nav-item">
          <a href="About Us.php " class="nav-link ">About Us</a>
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
	  
	  <?php
if ( isset( $_SESSION[ 'appointment_error' ] ) ) {

  ?>
<div class="alert alert-info my-0 alert-dismissible fade show alert-danger" role="alert"> <strong style="color:red; font-size: 18px;"> 	&#9888; </strong> 
	<?php echo $_SESSION['appointment_error']; ?> 
	<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	</div>
	
<?php
unset( $_SESSION[ 'appointment_error' ] );
}
?>

	  

	  
	  
	<div class="container">
		<br>
		<h1>Book An Appointment</h1><br>
		
<form class="row g-3"  action="AppointmentConnection.php" method="post">
	
  <div class="col-md-6">
	  
    <label  class="form-label">First Name</label>
    <input type="text" class="form-control" id="ap-fname" name="ap-fname"  placeholder="First Name" required>
	  
  </div>

	<div class="col-md-6">
		 <label for="l-name" class="form-label">Last Name</label>
    <input type="text" class="form-control" id="ap-lname" name="ap-lname" placeholder="Last Name" required>
  </div>
	
 
		<div class="col-md-6">
    <label class="form-label">Email</label>
    <input type="email" class="form-control" id="ap-email" name="ap-email" required placeholder="salmanahmed123@gmail.com">
 

	  	</div>
	

	
	<div class="col-md-6">
    <label class="form-label">Phone No</label>
    <input type="number" class="form-control" id="ap-number"  name="ap-number"  placeholder="03XX-XXXXXXX">
  </div>
	
 <div class="col-md-6">
    <label  class="form-label">Choose Problem</label>
    <select id="ap-problem" name="ap-problem" class="form-select">
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
	
	<div class="col-md-6">
    <label  class="form-label">Choose WorkShop</label>
    <select id="ap-shop" name="ap-shop" class="form-select">
      <option selected>Choose </option>
      <option>Suzuki</option>
      <option>Toyota </option>
      <option>Honda</option>
      <option>Kia</option>
      <option>Hyundai</option>
     
    </select>
  </div>
	
  <div class="col-md-6">
    <label  class="form-label">Appointment Date</label>
    <input type="date" required class="form-control" id="ap-date" name="ap-date" >
  </div>
	<div class="col-md-6">
    <label  class="form-label">Appointment Time</label>
    <input type="time" required class="form-control" id="ap-time" name="ap-time">
  </div>
  <div class="col-12">
    <label  class="form-label">Address</label>
    <input type="text" class="form-control" id="ap-address" name="ap-address" placeholder="1234 Main St">
  </div>
  
  <div class="col-md-8">
    <label  class="form-label">City</label>
    <input type="text" class="form-control" id="ap-City" name="ap-city">
  </div>

  <div class="col-md-4">
    <label  class="form-label">Zip Code</label>
    <input type="text" class="form-control" id="ap-zip" name="ap-zip">
  </div>

  <div class="col-12">
    <button  class="btn btn-primary">Book</button>
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
