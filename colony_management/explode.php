<html>
<body>
	<?php
	include ("connection.php");
	//$user1="select  *  from user ";
	 $tuser="SELECT user
			 FROM user";
	$result=mysqli_query($conn,$tuser);
	while($test=mysqli_fetch_array($result)){
		echo $test['user']."<br>";
}
	?>
	</body>
</html>