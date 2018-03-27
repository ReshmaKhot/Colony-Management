<?php
session_start();
if(!isset($_SESSION['username'])){
    header("Location: index.php");
}?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/addmemform.css">
</head>

<body>
    <div class="addmem">
            <form action="" method="POST" class="form-horizontal">
				<label>Enter email id:</label>
				<input type="email" name="email" placeholder="enter email id">
    <label class="control-label">Wing</label>
                <input type="text" name="wing">
                <br><br>
            <label class="control-label">Room No</label>
             <input type="number" name="room" min="100" max="408"> <br><br>
            <label class="control-label">Owner Name</label>
             <input type="text" name="ownernm" style="text-transform:uppercase"><br><br>
            <label class="control-label">Renter Name</label>
             <input type="text" name="renternm" style="text-transform:uppercase"><br><br>
            <label class="control-label">Owner Mobile No</label>
             <input type="text" name="omob" style="text-transform:uppercase"><br><br>
            <label class="control-label">Renter Mobile No</label>
             <input type="text" name="rmob" style="text-transform:uppercase"><br><br>
            <label class="control-label">Maintainance</label>
             <input type="text" name="mnt" style="text-transform:uppercase"><br><br>
                <input type="submit" class="btn btn-info" name="submit" value="Add Member"></form></div>
                <?php
 include("connection.php");
 if (isset($_POST['submit'])) {
	 if(empty($_POST['emailid'])||empty($_POST['wing'])||empty($_POST['room'])||empty($_POST['ownernm'])||empty($_POST['omob'])){
		 ?><script>
            alert('please enter correct data');
            window.location.href = 'addmemform.php';
        </script><?php
	 }
	 else{
$ql="insert into members(emailid,wing,roomno,ownername,rentername,ownermobno,rentermobno,maintainance) 
values('$_POST[email]',UPPER('$_POST[wing]'),'$_POST[room]',UPPER('$_POST[ownernm]'),UPPER('$_POST[renternm]'),'$_POST[omob]','$_POST[rmob]',UPPER('$_POST[mnt]') )";
$stmt=mysqli_query($conn,$ql); 
if( !$stmt) {
echo mysqli_error($conn);
} 
else
{
		?><script>
            alert('value inserted successfully');
            window.location.href = 'afteradmin.php';
        </script><?php
		
}
 }}
mysqli_close($conn);
        ?> 
</body>
</html>