<?php
session_start();
if(isset($_SESSION['logPassword'])){
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Complain </title>
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
          <a class="nav-link " aria-current="page" href="home.php">Home</a>
			
        </li>
		 <li class="nav-item ">
         <a class="nav-link " href="mechanic.php">Mechanic</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="Appointment.php">Appointment</a>
        </li>
		  <li class="nav-item">
          <a class="nav-link active" href="complain.php">Complain</a>
        </li>
		   <li class="nav-item">
          <a href="About Us.php" class="nav-link ">About Us</a>
       		   </li>
	
      </ul>
   <?php if ( isset( $_SESSION['fname'])){ ?>
		<div class="fname" >Hi!&nbsp;<?php echo $_SESSION['fname'];?> &nbsp; </div>
		<?php } ?>
	<form action="session destroy.php" method="post">
     
      <button class="btn btn-warning m-2" type="submit" id="signout" name="signout">Log Out</button>
       </form>
    </div>
  </div>
</nav>	
	  
	<div class="container">
		<br>
		<h1>Register  Complain</h1><br>
		
<form class="row g-3" method="post" action="ComplainConnection.php">
	
  <div class="col-md-6">
	  
    <label for="f-name" class="form-label">First Name</label>
    <input type="text" class="form-control" id="c-fname" name="c-fname" placeholder="First Name" required>
	  
  </div>

	<div class="col-md-6">
		 <label for="l-name" class="form-label">Last Name</label>
    <input type="text" class="form-control" id="c-lname" name="c-lname" placeholder="Last Name" required>
  </div>
	
 
		<div class="col-md-6">
    <label for="Email" class="form-label">Email</label>
    <input type="email" class="form-control" id="c-email"   name="c-email" required placeholder="salmanahmed123@gmail.com">
  </div>


	
	<div class="col-6">
    <label for="inputAddress" class="form-label">Address</label>
    <input type="text" class="form-control" id="c-address" name="c-address" placeholder="1234 Main St">
		
  </div>
		<div class="col-md-12">
    <label for="complain" class="form-label">Writer your complain here</label>
    <textarea class="form-control" id="c-complain"  name="c-complain" rows="5" > </textarea>
  </div>

  <div class="col-12">
    <button type="submit" class="btn btn-primary">Register</button>
  </div>
</form>  
 
 	</div>  
	  
<div class="container">
  <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
	  <br>
    <p style="padding-left: 441px; position: absolute;">© 2022 WORKSHOP. All Rights Reserved.</p>
   
   
  </footer>

</div>
	 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUxTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>	  

	</body>
	</html>
	

<?php
	}
else{
	header("location: login.php");
}
?>	
