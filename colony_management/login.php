<?php
	include_once 'connection.php';
	if(isset($_POST['user'])&&isset($_POST['pw'])){
    $user = $_POST['user'];
    $password = $_POST['pw'];
    $sql="select * from admin where name='$user' and password ='$password'  ";
    $result=mysqli_query($conn,$sql);
	$row=mysqli_fetch_array($result);
		/*if($num==1){
			session_start();
		
	
			
			$_SESSION['username']=$id;
		print_r("success");
		}*/
		 if($row['name'] ==$user && $row['password']==$password)
    {
			 session_start();
          $_SESSION['username']=$row['name']; // Initializing Session
          $_SESSION['userpwd']=$row['password'];
			 print_r("success");
		 }
		else{
			print_r("failed");
		}

}
?>