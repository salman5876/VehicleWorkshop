<?php
include_once('Admin fetching data.php');

session_start();
if(isset($_SESSION['logPassword'])){
	
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
	
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
  	  <link href="font_Footer.css" rel="stylesheet" type="text/css">

 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

	<style>  
		.fname{font-size: 30px;
		text-transform:capitalize;
		}
		hr {
  border-top: 3px solid black;
}
	</style>
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
          <a class="nav-link " href="admin.php">Home</a>
        </li>
		   <li class="nav-item">
          <a href="packges.php" class="nav-link active">Packages</a>
       		   </li>
      </ul>
<?php if ( isset( $_SESSION['fname'])){ ?>
		<div class="fname " >Hi!&nbsp;<?php echo $_SESSION['fname'];?> &nbsp; </div>
		<?php } ?>
	<form action="session destroy.php" method="post">
     
      <button class="btn btn-warning m-2" type="submit" id="signout" name="signout">Log Out</button>
       </form>
    </div>
  </div>
</nav>	
	
	
	
	
	<br>
  <div class="container">
<h3>Add Services </h3>
	
	  
		  <table class="table table-hover table-bordered ">
      <tr>
		   <thead class="table-light">	
   
      <th scope="col">pkg</th>
      <th scope="col">detail</th>
      <th scope="col">price</th>
      <th scope="col">Action</th>

      			   
			   </thead>
    </tr>
<!--			  <form action="package insert.php" method="post">-->
			  <tr>
		   <thead class="table-light">	
    
      <th><input type="text" id="pkg" name="pkg" ></th>
      <th><input type="text" id="detail" name="detail"  ></th>
      <th><input type="number" id="price" name="price"  ></th>      	   
      <th><button id="add" name="add" onClick="addValue()">Add</button></th>  	   
			   </thead>
    </tr>  
<!--			  </form>	-->
			  </table>
	  
	  <hr> <br>
	 <h3>  Service Details </h3>

	<div id="show_data" > </div>
		</div>  
	
	
<!--	modal for edit -->
<div class="modal fade" id="edit" >
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4>Edit</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        PKG <br> <input type="text" id="edit_pkg" name="edit_pkg"  > <br><br>
        DETAIL <br><input type="text" id="edit_detail" name="edit_detail"  > <br><br>
        PRICE <br> <input type="number" id="edit_price" name="edit_price"  > <br>
      </div>
      <div class="modal-footer">
        <button  class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button  class="btn btn-primary" onClick="saveEditDetail()" >Save changes</button>
		  <input type="hidden" id="hide_detail" >
      </div>
    </div>
  </div>
</div>


<div id="show"></div>
<script>
//	 display datbase data when evert time page is ready or refresh
	 $(document).ready(function(){
		 readValue();
		
	 });
	 
	
//	 function  for fetching data from database
function readValue(){
	var readvalue = "readvalue";
	$.ajax({
		
		url:"Admin fetching data.php",
		type: 'post',
//		readValue <-- readValue
		data: {readvalue:readvalue},
		success:function(data,status){
			
		$('#show_data').html(data);
		}
	});
	
}	 
	 
//	 function for add value to data base using ajex 
function addValue(){

	var pkg = document.getElementById('pkg').value;
	var detail = document.getElementById('detail').value;
	var price = document.getElementById('price').value;

	$.ajax({
		url:"Admin package insert.php",
		type: 'post',
//		pkg <-- pkg
		data: {pkg:pkg,
			   detail:detail,
			   price,price			  
			  },
		success:function(data,status){
			readValue();
		}
		
	});
}
   
//function to delete record on screen 
	 function deleteValue(deleteSno){
	var cnfrm = confirm("Are you Sure");
	if(cnfrm==true){
		 $.ajax({
		url:"Admin packages delete.php",
		type: 'post',
//		deleteSno <-- deleteSno
		data: {deleteSno:deleteSno},
		success:function(data,status){
			readValue();	
		}
	});
	}
}	
		
	
//function used to disply old data in modal
	
	$(document).on("click","#editBtn", function(){
		$('#edit').modal("show");

		let id = $(this).attr("editDetail");
		$('#hide_detail').val(id);
//		console.log(hide_detail);
		mydata = {sid:id};
		$.ajax({
			url:"Admin edit paxkage.php",
			method:"POST",
			dataType: "JSON",
			data: JSON.stringify(mydata), 
			success:function(data){
				console.log(data);
				$('#edit_pkg').val(data.pkg);
				$('#edit_detail').val(data.detail);
				$('#edit_price').val(data.price);
				
			},
		});
	});
	
//	function used to update data 
	
	function saveEditDetail(){

	var pkg1 = document.getElementById('edit_pkg').value;
	var detail1 = document.getElementById('edit_detail').value;
	var price1 = document.getElementById('edit_price').value;
	var hide_id = document.getElementById('hide_detail').value;

		$.post("Admin package update.php"
			   ,			   
			 {
			   pkg1:pkg1,
			   detail1:detail1,
			   price1:price1,			  
			   hide_id:hide_id	,		  
			  },
			  function(data,status){
			$('#edit').modal("hide");
			readValue();	
		}
			  );
}
	
	
 </script> 
	




</body>
	
</html>






<?php
	}
else{
	header("location: login.php");
}
?>	
