<?php
session_start();
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Log in </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<style> 
body, html {
  height: 100%;
 margin: 0px;
	padding: 0px;
}



.image {
  

  background-image: url("img/background img.jpg");
  

  filter: blur(8px);
 
  height: 100%; 
 z-index: -1;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
	

	
	.border{
		 margin: auto;
		padding:10px;
		color: white;
		position: absolute;
		border-radius: 10px;
border: 10px solid black;
		border:none;
		width: auto;
		height: auto;
		  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
		
	}
</style>
</head>
<body>

	<div class="image"> </div>
	
<div class="border">
	<?php
		if(isset($_SESSION['error'])){
		?>	
	<div class="alert alert-danger" role="alert">
  <?php echo $_SESSION['error']; ?>
</div>
			<?php
			unset( $_SESSION['error']);
		}
?>
	
Sign In
	<hr>
	<form action="loginconnection.php" method="post">
	Email <br>
	<input  type="email"  id="s-email" name="s-email" required style="width: 100%; border:1px solid lightgray; border-radius: 5px;"> <br> 
	Password <br>
	<input type="password"  id="s-password" name="s-password" required style="width: 100%; border:1px solid lightgray; border-radius: 5px;" >
		

		<?php
		if(isset($_SESSION['error'])){
			echo $_SESSION['error'];
			unset( $_SESSION['error']);
		}
?>
		
		
		<br> <br>
	<input class="btn btn-primary" type="submit" name="s-button" value="Log In" style="position: relative ; left: auto;">
	
		<input class="btn btn-primary" type="submit"  name="as-button" value="Admin Log In" style="position: relative; left: auto;">
	</form>
	
	<hr	>
	

	<a href="Sign-up.php">
	<input class="btn btn-primary " type="submit"  value="Sign Up" style="width: 100%; "></a>
	
	

	

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>	
	  
	
	
	
	
	

</body>
</html>
