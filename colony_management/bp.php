
<?php        include("connection.php");
                      if(isset ($_GET['id'])){
						  $data=$_GET['id'];
                        	 $sql="delete  from notice where id= '$data' ";
                          $stmt=mysqli_query($conn,$sql); 
if( !$stmt) {
echo mysqli_error($conn);
} 
else
{
		?><script>
            //alert('notice deleted successfully');
            window.location.href = 'notice.php';
        </script><?php
		
}
 }
mysqli_close($conn);
                      
                       ?> 