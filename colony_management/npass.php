<!DOCTYPE html>
<html>
<title>Profile</title>
<head>
<link rel="icon" href="company.jpg" type="image"></link>
<link rel="stylesheet" href="list.css" type="text/css"></link>

</head>
<style>
.uh1{
	color:#840000;
	font-family:Calibri, Sans-serif;
}
input[type=password]
{
	width:50%;
	padding:15px;
	outline:none;
	margin:10px 3px;
}
.lbutton
{
	padding:15px;
	margin:0px 150px 0px 150px;
	outline:none;
	background-color:#006666;
	border:4px solid #006666;
	border-radius:10px ;
	color:white;
	outline:none;
}
.lbutton:hover
{
	background-color:#00CCCC;
	color:black;
	box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
</style>
<body>
<header>
<div class="div1">
<img src="jp.jpg" class="img1" ></img>


</div></header>
<ul class="ul0">
<a class="a0" href="newjobs.php"><li  class="li0" >New Jobs</li></a>
<a class="a0" href="profile.php" ><li class="li0">Profile</li></a>
<a class="a0" href="resume.php" ><li class="li0">Resume</li></a>
<a class="a0" href="npass.php" style="color:black;background-color:white;height:39px;"><li class="li0">Change Password</li></a>
<a class="a0" href="profile.php?action=delete" ><li class="li0">DELETE ACCOUNT</li></a>
<a class="a0"  href="home.php?logout"><li class="li0">Logout</li></a>
</ul>
<?php
session_start();
include_once 'connect.php';
if(!isset($_SESSION['user'])  &&  (($_SESSION['category']!='fresher') || ($_SESSION['category']!='professional')))
{
	header("Location: login.php");
}
else 
{
	$uname=$_SESSION['user'];
}
if(isset($_POST['plogin']))
{
	$oldpassword=$_POST['oldpassword'];
	$newpassword=$_POST['newpassword'];
	$conpassword=$_POST['conpassword'];

$user=mysqli_query($db_conn,"SELECT * from register where uname='$uname'");
$count=mysqli_num_rows($user);
if($count)
{	
	
while($row1=mysqli_fetch_array($user))
{
		$password=$row1['password'];
			
}
if($password!=$oldpassword)
	{
		?>
		<script>alert('Wrong old Password');
		window.location.href = 'npass.php'; 
		</script> 
		<?php
	}
	if($newpassword==$conpassword)
	{
        $sql12=mysqli_query($db_conn,"UPDATE register SET password='$conpassword' where uname='$uname'")	;
	}
	if($sql12)
	{
		?>
		<script>alert('Password Changed');
		window.location.href = 'npass.php'; 
		</script> 
	<?php
	}	
}
}
if(isset($_GET['action'])=='delete')
{	
$sql1=mysqli_query($db_conn,"DELETE from register where uname='$uname'");
if(!$sql1)
{echo mysqli_error($db_conn);}	
else
{?>
<script>alert("Successfully deleted account");
        window.location.href='home.php?logout';</script>
        <?php

}
}
	
?>
<center>
<h1 class="uh1">WELCOME <?php echo $uname ?>!!</h1>
<input type="password" name="oldpassword" placeholder="Old Password" required><br>
<input type="password" name="newpassword" placeholder="New Password" required><br>
<input type="password" name="conpassword" placeholder="Confirm Password" required><br>
<input type="submit" name="plogin" class="lbutton"><br>