<!DOCTYPE html>
<html><body>
<?php include("nav.php");?>
     <div class="memtxt">Add MEMBERS</div>
  <div class="members"  >
      <div class="add">
          <div class="container">
            <div class="table-responsive">          
                <table class="table table-striped table-hover table-fixed">
                    <div class="tablehead">
                    <thead>
                    <tr>
                     
						<th>Email Id</th>
                        <th>Wing</th>
                        <th>Room</th>
                        <th>Owner Name</th>
                        <th>Renter Name</th>
                        <th>Owner Mobile No</th>
                        <th>Renter Mobile No</th>
                        <th>Maintainance</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>    
                             <?php
                             include("connection.php");
                            $ql="select * from members";
                            $stmt=mysqli_query($conn,$ql);
                            while($test=mysqli_fetch_array($stmt))
                             {
                            
                             echo"<td>".$test['emailid']."</td>";
                             echo"<td>".$test['wing']."</td>";
                             echo"<td>".$test['roomno']."</td>";
                             echo"<td>".$test['ownernm']."</td>";
                             echo"<td>".$test['renternm']."</td>";
                             echo"<td>".$test['ownermobno']."</td>";
                             echo"<td>".$test['rentermobno']."</td>";
                             echo"<td>".$test['maintainance']."</td>";
                             echo "</tr>";
                             }
                             ?>
                          </tr>
                    </tbody>
                </div>
            </table>
        </div>  
    </div>
</div>
<div class="subbtn">
    <a href="addmemform.php" >Add MEMBER</a>
	    
      <!-- Trigger/Open The Modal -->
    
	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#mymodal">Remove Member</button></div></div></body></html>