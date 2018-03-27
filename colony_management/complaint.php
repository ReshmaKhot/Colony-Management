<?php
session_start();
if(!isset($_SESSION['user'])){
    header("Location: index.php");
}?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/complaint.css">
	</head>
<body>
	<?php include("usernav.php");?>
	<div class="com" >
	<form method="post">
		<?php date_default_timezone_set("Asia/Calcutta");
		$date=date('Y/m/d h:i:sa');
		$from=$_SESSION['user']?>
		<textarea rows="20" cols="150" name="com" placeholder="enter containt here">complaint</textarea><br>
		<div class="postbtn">
		<input type="submit" class="btn btn-primary" name="submit" value="post">
		</div></form>
		<?php
		include("connection.php");
		
		
		if(isset($_POST['submit']))
		{
			$in="insert into complaint(date,fromuser,complaint) values('$date','$from','$_POST[com]')";
			$result=mysqli_query($conn,$in);
if( !$result) {
echo mysqli_error($conn);
} 
else
{
		?><script>
            alert('value inserted successfully');
            window.location.href = 'complaint.php';
        </script><?php
		
}
		}
mysqli_close($conn);
			
		?></div>
<div class="myp">
	<div class="myptxt">
		<h3>My Posts</h3>
	</div>
	<?php 
	include("connection.php");
	$post="select *  from complaint where fromuser = '$_SESSION[user]' order by id DESC ";
	$result=mysqli_query($conn,$post);
	while($test=mysqli_fetch_array($result)){?>
	<div class="myph">
	<div class="date">
		<?php echo $test['date'];?>
	</div>
	<div class="mypcontent">
		<p><?php echo $test['complaint'];?></p>
		</div></div><?php }?>
</div>
		

</body>
</html>