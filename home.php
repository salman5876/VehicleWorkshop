<?php

session_start();
if(isset($_SESSION['logPassword'])){
	
?>

<!doctype html>
<html lang="en">
<head>
	
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Home</title>
	
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	
	<style>
		
@import url('https://fonts.googleapis.com/css2?family=Great+Vibes&family=Nunito:ital,wght@1,900&display=swap');

	</style>
	<link href="font_Footer.css" rel="stylesheet" type="text/css">
</head>
<body>
	

	
<nav class="navbar navbar-expand-lg bg-light  p-3 	  	">
  <div class="container-fluid">
    <div  class="navbar-brand" > <img class="d-block img-fluid" src="logo/main logo.png"  width="120" height="80"  alt=" logo"> </div>
    <button class="	navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item"> <a class="nav-link active nav1" aria-current="page" href="home.php">Home</a> </li>
        <li class="nav-item ">
         <a class="nav-link  " href="#services">Services</a>
        </li>
        <li class="nav-item nav1"> <a class="nav-link" href="Appointment.php">Appointment</a> </li>
        <li class="nav-item nav1" > <a class="nav-link" href="complain.php">Complain</a> </li>
        <li class="nav-item nav1"> <a href="About Us.php	" class="nav-link ">About Us</a> </li>
      </ul>
     
		<?php if ( isset( $_SESSION['fname'])){ ?>
		<div class="fname nav1" >Hi!&nbsp;<?php echo $_SESSION['fname'];?> &nbsp; </div>
		<?php } ?>
		
		<form action="session destroy.php" method="post">
     
      <button class="btn btn-warning m-2" type="submit" id="signout" name="signout">Log Out</button>
       </form></div>
  </div>
</nav>
	
	

	
<!--	this session work for complain-->
<?php
if ( isset( $_SESSION[ 'complain_register' ] ) ) {

  ?>
<div class="alert alert-info my-0 alert-dismissible fade show" role="alert"> <strong style="color:green; font-size: 18px;"> &#10004; </strong> 
	<?php echo $_SESSION['complain_register']; ?> 
	<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	</div>
	
<?php
unset( $_SESSION[ 'complain_register' ] );
}
?>
	
	
	<!--	this session work for Mechanic booked-->
<?php
if ( isset( $_SESSION[ 'mechanic_booked' ] ) ) {

  ?>
<div class="alert alert-info my-0 alert-dismissible fade show" role="alert"> <strong style="color:green; font-size: 18px;"> &#10004; </strong> 
	<?php echo $_SESSION['mechanic_booked']; ?> 
	<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	</div>
	
<?php
unset( $_SESSION[ 'mechanic_booked' ] );
}
?>
	
	

	
<!--this sesstion for appointment	-->
	<?php
	if(isset($_SESSION['Appoint_sucess'])){
		
		 ?>
<div class="alert alert-info my-0 alert-dismissible fade show" role="alert"> <strong style="color:green; font-size: 18px;"> &#10004; </strong> 
	<?php echo $_SESSION['Appoint_sucess']; ?> 
	<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	</div>
	
<?php
	unset($_SESSION['Appoint_sucess']);	
	}
	?>

	
	
	<?php
		if(isset($_SESSION['name_display'])){
			echo $_SESSION['name_display'];
			unset($_SESSION['name_display']);
		}
	?>
	
	
<div id="carouselExampleDark" class="carousel carousel-dark slide pointer-event" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
	
    <div class="carousel-item active" data-bs-interval="2000" ><img class="d-block w-100 img-fluid" src="img/tow.jpg" width="1000" height="auto"    alt="tow"/>
      <div class="carousel-caption d-none d-md-block">
        <h2>Welcome to Workshop</h2>
        <br>
        <a href="Display package.php">
        <button class="btn btn-dark">Packages</button></a>
		  <a href="mechanic.php">
        <button class="btn btn-info">Book  Mechanic</button></a>
      </div>
    </div>
   <div class="carousel-item" data-bs-interval="3000"> <img class="d-block w-100 img-fluid"  src="img/car 2.jpg" width="1000" height="auto" alt=""/>
        <div class="carousel-caption d-none d-md-block">
        <h2>Welcome to Workshop</h2>
        <br>
        <a href="Display package.php">
        <button class="btn btn-danger">Packages</button></a>
		  <a href="mechanic.php">
        <button class="btn btn-warning">Book  Mechanic</button></a>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="3000"> <img class="d-block w-100 img-fluid" src="img/wash.jpg" width="1000" height="auto" alt=""/>
       <div class="carousel-caption d-none d-md-block">
        <h2>Welcome to Workshop</h2>
        <br>
        <a href="Display package.php">
        <button class="btn btn-primary">Packages</button></a>
		  <a href="mechanic.php">
        <button class="btn btn-light">Book  Mechanic</button></a>
      </div>
    </div>
  </div>
  
</div>
	
	
	
	
	
	
	
	
	
	<section  id="services">
<div class="container px-4 py-5" >
  <h2 class="pb-2 border-bottom">Services</h2>
  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3  g-4 py-5">
    <div class="box col d-flex align-items-start "> <img src="logo/gear.png" width="80" height="80" alt="gear" class="img-fluid m-2 overlay" />
      <div>
        <h4 class="fw-bold mb-0 " >Engin Replacement</h4>
        <p>Offer top quality engine replacement service. Engines for Honda, Toyota and most Hybrid vehicles.</p>
      </div>
    </div>
    <div class="col d-flex align-items-start"> <img src="logo/break.png" width="80" height="80" alt="break" class="img-fluid m-2 overlay"/>
      <div>
        <h4 class="fw-bold mb-0">Break</h4>
        <p>All makes and models brake and disc pads replacement service.</p>
      </div>
    </div>
    <div class="col d-flex align-items-start"> <img src="logo/battery.png" width="80" height="80" alt="battery" class="img-fluid m-2  overlay"/>
      <div>
        <h4 class="fw-bold mb-0">Battery</h4>
        <p>Honda and Toyota HVBMS inspection and hybrid battery replacement service.</p>
      </div>
    </div>
    <div class="col d-flex align-items-start"> <img src="logo/tyre.png" width="80" height="80"  class="img-fluid m-2 overlay" alt="tyre"/>
      <div>
        <h4 class="fw-bold mb-0">Tyre</h4>
        <p>Paragraph of text beneath the heading to explain the heading.</p>
      </div>
    </div>
    <div class="col d-flex align-items-start"> <img src="logo/wash.png" width="80" height="80" class="img-fluid m-2 overlay" alt="wash"/>
      <div>
        <h4 class="fw-bold mb-0">Wash</h4>
        <p>We are providing best car interior and exterior detailing services in Islamabad.</p>
      </div>
    </div>
    <div class="col d-flex align-items-start"> <img src="logo/color.png" width="80" height="80" class="img-fluid m-2 overlay" alt="color"/>
      <div>
        <h4 class="fw-bold mb-0">Color</h4>
        <p> We specialize in Paint Protection Film installation, protect your car from harsh elements.
                 </p>
      </div>
    </div>
  </div>	
</div>
		</section>
	
	
	 	 <div class="container">
	  <h4 class="pb-2 ">Our Quality Services</h4>
		 
		 <img src="img/click.jpg" width="20" height="20" alt="gear" class="img-fluid m-2 overlay">
		Certified Expert Car and Bike Mechanics. <br>
		 		 

		 <img src="img/click.jpg" width="20" height="20" alt="gear" class="img-fluid m-2 overlay">

	To bring premium mechanical services at your home is our mission.<br>
	 <img src="img/click.jpg" width="20" height="20" alt="gear" class="img-fluid m-2 overlay">
	We have a detailed process to verify the authenticity of mechanics.<br>
		 <img src="img/click.jpg" width="20" height="20" alt="gear" class="img-fluid m-2 overlay">
To become the most trusted auto maintenance service provider in Pakistan.
	</div> 
	
<div class="container">	
  <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
	  <br>
   	 <p >© 2022 WORKSHOP. All Rights Reserved.</p>
     </footer></div>
	
	 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>


	
	
  <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

   <!--JS FILE LINK-->
   <script src="JS/script.js"></script>
	</body>
</html>


<?php
	}
else{
	header("location: login.php");
}
?>	

