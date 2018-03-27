<?php
session_start();
if(!isset($_SESSION['username'])){
    header("Location: index.php");
}?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" type="text/css" href="css/members.css">
    </head>
<body>
<?php include("nav.php");?>
     <div class="memtxt" >B WING Members</div> 
  <div class="members">
      <div class="add">
          <div class="container">
            <div class="table-responsive">          
                <table class="table table-striped table-hover table-fixed">
                    <div class="tablehead">
                    <thead>
                    <tr>
                       	<th>emailid</th>
                        <th>Wing</th>
                        <th>Room</th>
                        <th>Owner Name</th>
                        <th>Renter Name</th>
                        <th>Owner Mobile No</th>
                        <th>Renter Mobile No</th>
                        <th>Maintainance</th>
						<th></th>
                    </tr>
						</thead>
                    <tbody>
                        <tr>    
                             <?php
							
                             include("connection.php");
                            $ql="select * from members where wing='B' and emailid!='admin' ";
                            $stmt=mysqli_query($conn,$ql);
							
							$count=mysqli_num_rows($stmt);
                           while($test=mysqli_fetch_array($stmt))
                             {
							   $id=$test['id'];
							    echo"<td>".$test['emailid']."</td>";
                             echo"<td>".$test['wing']."</td>";
                             echo"<td>".$test['roomno']."</td>";
                             echo"<td>".$test['ownernm']."</td>";
                             echo"<td>".$test['renternm']."</td>";
                             echo"<td>".$test['ownermobno']."</td>";
                             echo"<td>".$test['rentermobno']."</td>";
                             echo"<td>".$test['maintainance']."</td>";
							
							   
							  
					  
				echo '<td><a href="memdelb.php?id=' . $test['id'] . '">Delete</a><td>';
							 
							   echo "<tr>";
						   
							
								}					

							
   						
								
							
							
											

							?>

								</tr>
                    </tbody>
					</div>
            </table>
							
										
				
        </div>  
    </div>
</div>
	</div>
	</body>
</html>