<?php
session_start();
if(!isset($_SESSION['username'])){
    header("Location: index.php");
}?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <link rel="stylesheet" type="text/css" href="css/admincomplaint.css">
		
    </head>
<body>
<?php include("nav.php");?>
    <?php 
            include("connection.php");
            $st="select  *  from complaint order by id DESC ";
            $result=mysqli_query($conn,$st);
          
            
                while($test=mysqli_fetch_array($result))
                {?>
            	<div class="complaint"> 
            		<div class="note1">
                		<?php echo $test['fromuser'];?><br><?php
							  echo $test['date'];
						?>
            		</div>
                	<div class="note3">
                	<p><?php 
                       echo $test['complaint'];?>
					</p>
            		</div>
			
                	<div class="delete"  >  
						<?php
						echo '
						<a href="complentdel.php?id=' . $test['id'] . '">Delete</a>'?>
					</div>
				
             
    			</div><?php }?>
    </body>
</html>