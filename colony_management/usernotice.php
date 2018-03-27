<?php
session_start();
if(!isset($_SESSION['user'])){
    header("Location: index.php");
}?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <link rel="stylesheet" type="text/css" href="css/notice.css">
    </head>
<body>
<?php include("usernav.php");?>
    <?php 
            include("connection.php");
			$u=$_SESSION['user'];
            $st="select  *  from notice   where touser='$u' order by id DESC ";
                $result=mysqli_query($conn,$st);
                //$row=mysqli_fetch_array($result);
            $count=mysqli_num_rows($result);
            echo $count;?>
            <?php 
                while($test=mysqli_fetch_array($result))
                      {?>
            <div class="notice"> 
            <div class="note1">
                <?php echo $test['subject'];?>
            </div>
            <div class="note2">
                <?php echo $test['date'];?>
            </div>
                <div class="note3">
                <p><?php 
                       echo $test['content'];
					  ?></p>
            </div><!--<form method="POST">
                <div class="delete"  > <!--  <input type="submit" class="btn btn-info" name="delete" value="delete Notice" text-align="center"></div></form>-->
             
    </div><?php /*      include("connection.php");
                      if(isset ($_POST['delete'])){
                          $sql="delete from notice  where id= '$test[id]' ";
                          $stmt=mysqli_query($conn,$sql); 
if( !$stmt) {
echo mysqli_error($conn);
} 
else
{
		?><script>
            alert('value deleted successfully');
            window.location.href = 'usernotice.php';
        </script><?php
		
}
 }
mysqli_close($conn);
                      }*/
	}?>  
    </body>
</html>