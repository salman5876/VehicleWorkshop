<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign up </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	  
  </head>
  <body>


	  
	 
	  
	<div class="container">
		<br>
		<h1>Registration Form </h1><br>
		
<form class="row g-3" action="SignupConnection.php" method="post">
	
  <div class="col-md-6">
	  
    <label class="form-label">First Name</label>
    <input type="text" class="form-control" id="s-fname" name="s-fname" placeholder="First Name" required>
	  
  </div>
	
	<div class="col-md-6">
		 <label class="form-label">Last Name</label>
    <input type="text" class="form-control" id="s-lname" name="s-lname" placeholder="Last Name" required>
  </div>
	
 
		<div class="col-md-6">
    <label class="form-label">Email</label>
    <input type="email" class="form-control error" id="s_email " name="s_email" required   placeholder="salmanahmed123@gmail.com">
				<div class="emailerror" style="color: red;"></div>
		
		
  </div>
	<div class="col-md-6">
    <label class="form-label">Phone No</label>
    <input type="number" class="form-control" id="s-number" name="s-number" placeholder="03XX-XXXXXXX">
  </div>
	
	<div class="col-md-12 ">
 <label  class="form-label">Select Gender</label> <br>
  <input class="form-check-input" type="radio" name="s-gender" id="male" value="Male">
  <label class="form-check-label" for="radio">
   Male
  </label>
<br>
  <input class="form-check-input" type="radio" name="s-gender" id="female"  value="Female">
  <label class="form-check-label" for="radio">
    Female
  </label>
<br>
  <input class="form-check-input" type="radio" name="s-gender" id="other"  value="Other">
  <label class="form-check-label" >
    Other
  </label>
	</div>
	
  <div class="col-md-6">
    <label class="form-label">Password</label>
    <input type="password" required class="form-control"  id="s-password" name ="s-password"placeholder="min 8 chararacter">
	  <?php if(isset($_SESSION['pass_length'])){
		  echo $_SESSION['pass_length'];
		 unset($_SESSION['pass_length']);
		  
	  } ?>	
	
  </div>
	<div class="col-md-6">
    <label class="form-label">Confirm Password</label>
    <input type="password" required class="form-control" id="s-Cpassword" name ="s-Cpassword"placeholder="min 8 chararacter">
		 <?php if(isset($_SESSION['pass_match'])){
		  echo $_SESSION['pass_match'];
		 unset($_SESSION['pass_match']);
		  
	  } ?>	
  </div>
	
  <div class="col-12">
    <label  class="form-label">Address</label>
    <input type="text" class="form-control" id="s-adsress" name="s-address" placeholder="1234 Main St">
  </div>
  
  <div class="col-md-8">
    <label  class="form-label">City</label>
    <input type="text" class="form-control" id="s-city" name="s-city">
  </div>
 
  <div class="col-md-4">
    <label  class="form-label">Zip Code</label>
    <input type="text" class="form-control error" id="s-zip" name="s-zip">
  </div>
 
  
  <div class="col-12">
    <button  id="submit_s" name="submit_s" class="btn btn-primary">Sign Up</button>
  </div>
</form>  
 
 	</div>  
	  
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	  
	  
	<script>
		
		$(document).ready(function(){
			$('.error').keyup(function(){
				var email = $('.error').val();
				
				
				$.ajax({
					type:"post",
					url:"SignupConnection.php",
					data:{s_email:email},
					success:function(data){
				
					$('.emailerror').text(data);
					}
				});
				
				
			});
			
		});

	  </script>  
	  
	  
	
	  
  
	  
	  
	</body>
	
	
	
	
	


