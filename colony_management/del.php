<!DOCTYPE html>
<html>
<body>
 <?php
        include("connection.php");
       
            
            $del="delete from members where id=$test[id] ";
            
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
		
}?>
</body>
</html>