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
     <div class="memtxt" >All Members</div> 
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
                            $ql="select * from members where emailid !='admin' ";
                            $stmt=mysqli_query($conn,$ql);
							
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
							
							/*
							echo '<TD><INPUT TYPE=BUTTON  NAME="  '.$id.' " VALUE="delet" id=" '.$test['id'].' "></td>';*/
							
							/*echo '<td><input type="button" id='.$test['id'].' class="mem" value='.$test['id'].' name='.$test['id'].' ></td>';*/
							   
							  	  
				echo '<td><a href="memdel.php?id=' . $test['id'] . '">Delete</a><td>';
							   echo "<tr>";
						   
							
								}					

							
   						
								/*$dataid=$_POST['id'];	
       							$del="delete from members where id='$dataid' ";
            					$delst=mysqli_query($conn,$del);
            					if( !$delst)
								{?>
									<script>
									
										window.alert("unsuccess");
									</script><?php
								} 
								else
								{?>
									<script>
										window.location.href("b.php");
										window.alert("success");
									</script><?php	
								}*/
							
							
											

							?>

								</tr>
                    </tbody>
					</div>
            </table>
							<!--<script>

									$(".button").click(function(){				
	var mem=$(this).attr('id');
	$.ajax({
	type:"POST",
	url:"memdel.php",
	data: {
		'memid' : mem
	},
		success:function(response){
					console.log(response);
                    if(response =='success'){
						window.location.href="B.php";
						window.alert("success");
                    }else{
                        window.alert("Invalid username and password!");
                    }	
	},
	
	});

			});		</script>-->
										
				
        </div>  
    </div>
</div>
	</div>
	</body>
</html>