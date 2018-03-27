
							

<?php        include("connection.php");
                      if(isset ($_GET['id'])){
						  $data=$_GET['id'];
                        	 $sql="delete  from members where id= '$data' ";
                          $stmt=mysqli_query($conn,$sql); 
if( !$stmt) {
echo mysqli_error($conn);
} 
else
{
		?><script>
         
            window.location.href = 'A.php';
        </script><?php
		
}
 }
mysqli_close($conn);
                      
                       ?> 