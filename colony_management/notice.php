<?php
session_start();
if(!isset($_SESSION['username'])){
    header("Location: index.php");
}?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <link rel="stylesheet" type="text/css" href="css/notice.css">
	<script src="https://code.jquery.com/jquery-3.2.1.js">
	</script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		
    </head>
<body>
<?php include("nav.php");?>
    <?php 
            include("connection.php");
            $st="select  *  from notice group by date  order by id DESC   ";
			 $result=mysqli_query($conn,$st);
           ?>
            <?php 
                while($test=mysqli_fetch_array($result))
                      {?>
				
            <div class="notice"> 
            <div class="note1"><h3>
				<?php echo $test['subject'];?></h3>
            </div>
            <div class="note2">
                <?php echo $test['date'];?>
            </div>
                <div class="note3">
                <p ><?php 
                       echo nl2br($test['content']);?></p>
					
					
					 <?php /*
                       echo "*".$test['important']."*";*/?>
            </div>
				
				
				<div class="delete"  >
				<?php
					  
				echo '<a href="bp.php?id=' . $test['id'] . '">Delete</a>'?>
				
				</div>
				 </div><?php }?>
	
    </body>
</html>