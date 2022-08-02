	<?php
include_once('connection.php');

extract($_POST);

$pkg = "SELECT * FROM `package`";
$result_pkg = mysqli_query($conn, $pkg);


	
if(isset($_POST['readvalue'])){
	
	$data =  '<table class="table table-hover table-bordered table-responsive">
      <tr>
		   <thead class="table-light">	
      <th >Sno.</th>
      <th >pkg</th>
      <th >detail</th>
      <th >price</th>
      <th colspan=2>Action</th>

      			   
			   </thead>
    </tr>';
 

		
 $sno=1;
	while($row_pkg = mysqli_fetch_assoc($result_pkg))
	{ 
	
  $data .= '<tr>
      
      <td> '. $sno.'				   </td>
      <td> '. $row_pkg['pkg'].'    </td>
      <td> '. $row_pkg['detail'].'  </td>
      <td> '. $row_pkg['price'].'   </td>
    
	<td>
	<button id="editBtn" editDetail='.$row_pkg['Sno'].' > Edit </button> 
	</td> 
	<td>
	<button  onclick="deleteValue('.$row_pkg['Sno'].')" > Detele </button> 
	</td> 
	
    </tr>';
		
		$sno ++;
 }

$data .= '</table>';
	
	echo $data;
}
?>

