
<?php
session_start();
if(isset($_SESSION['logPassword'])){
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About Us </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
   <style> 	.overlay:hover{
  transform: scale(1.1);
}</style>
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
        <li class="nav-item nav1">
          <a class="nav-link  " aria-current="page" href="home.php">Home</a>
        </li>
		 <li class="nav-item nav1"><a class="nav-link  " href="mechanic.php">Mechanic</a>
        </li>
        <li class="nav-item nav1"><a class="nav-link " href="Appointment.php">Appointment</a>
        </li>
		  <li class="nav-item nav1"><a class="nav-link " href="complain.php">Complain</a>
		  </li>
		   <li class="nav-item nav1"><a href="About Us.php " class="nav-link active">About Us</a>
       		   </li>
	
      </ul>
      <?php if ( isset( $_SESSION['fname'])){ ?>
		<div class="fname nav1" >Hi!&nbsp;<?php echo $_SESSION['fname'];?> &nbsp; </div>
		<?php } ?><link href="font_Footer.css" rel="stylesheet" type="text/css">
	<form action="session destroy.php" method="post">
      <a href="login.php">
      <button class="btn btn-warning m-2" type="submit" id="signout" name="signout">Log Out</button>
      </a> </form>
    </div>
  </div>
</nav>	
	
 
	  
	<div class="container ">
	<h1></h1>
<br>
<h5>Helping millions grow better</h5>
<br>
<p class="text  ">There’s this notion that to grow a business, you have to be ruthless. But we know there’s a better way to grow. One where what’s good for the bottom line is also good for customers. We believe businesses can grow with a conscience, and succeed with a soul — and that they can do it with inbound. That’s why we’ve created an ecosystem uniting software, and community to help people.  </p>
	  

		

 
<div class="row mb-2 ">
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary">SALMAN AHMED</strong>
          <h3 class="mb-0">Developer</h3>
          <div class="mb-1 text-muted">5-B</div>
          <p class="card-text mb-auto ">I am Student of BS Information Techhnology in Bahria University Islamabad, This is our university project on web development, Submitted to Sir Usman Shafiq.</p>
         
        </div>
        <div class="col-md-5  order-md-1">
         
        	<img class="img-fluid overlay" src="img/salman.jpeg" width="330" height="auto" alt="dp"/> </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-success">MUSA HAFEEZ</strong>
          <h3 class="mb-0">Developer</h3>
          <div class="mb-1 text-muted">5-B</div>
          <p class="mb-auto">This is our university project on web development.</p>
          
        </div>
        <div class="col-md-5  order-md-1">
			

<img class="img-fluid overlay" src="img/WhatsApp Image 2022-05-30 at 2.56.59 PM (1).jpeg" width="300" height="auto" alt="dp"/>  
		  </div>
    </div>
  </div>	
		</div>  	  
	  
		
		
		
<div class="container">
  <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
	  <br>
    <p style="padding-left: 441px; position: absolute;">© 2022 WORKSHOP. All Rights Reserved.</p>
   
   
  </footer>

</div>
	
	  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>	
	  
	  
	  
	</body>
	
	
	
	
	
</html>]
	
	<?php
	}
else{
	header("location: login.php");
}
?>	
