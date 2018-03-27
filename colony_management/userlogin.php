<?php
	if(isset($_POST['user'])&&isset($_POST['pw'])){
	include_once 'connection.php';
	
    $user = $_POST['user'];
    $password = $_POST['pw'];
    $sql="select * from user where user='$user' and password ='$password'  ";
	
    $result=mysqli_query($conn,$sql);

	$num=mysqli_num_rows($result);
			$row=mysqli_fetch_array($result);
		
		
		 if($row['user'] ==$user && $row['password']==$password)
    {
			 session_start();
          $_SESSION['user']=$row['user']; // Initializing Session
          $_SESSION['userpwd']=$row['password'];
			 print_r("success");
		 }
		else{
			print_r("failed");
		}

}
?>