<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" type="text/css" href="css/afteradmin.css">
    </head>
<body> 
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
    
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#mymodal">Remove Member</button>

<!-- The Modal -->
<div id="mymodal" class="modal fade posmod">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <!--<span class="close">&times;</span>-->
         <button type="button" class="close" data-dismiss="modal">&times;</button>
        <p>please Enter details of member which you want to delete</p>
    </div>
    <div class="modal-body">
        <form method="POST">
            <label>Wing:</label>
        <input type=text name="wing"><br><br>
            <label>Room No</label>
        <input type="number" name="room"><br><br>
            <input type="submit" name="delete" value="delete" class="btn btn-primary">
            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        </form>
    
        <?php
        include("connection.php");
        if(isset($_POST['delete'])){
            if(empty($_POST['room']) || empty($_POST['wing'])){?>
               <script>
            alert('Plese enter the data');
            window.location.href="afteradmin.php";
        </script><?php
            }
            else{
            $del="delete from members where roomno= '$_POST[room]'  AND wing='$_POST[wing]' ";
            
            $delst=mysqli_query($conn,$del);
            if( !$delst) {
echo mysqli_error($conn);
} 
else
{
		?><script>
            alert('Member Details deleted successfully');
            window.location.href = 'afteradmin.php';
        </script><?php
		
}
        }}?></div>

  
  </div>

</div>

	  </div></div>
	  </body>
</html>