<?php
session_start();
if(!isset($_SESSION['username'])){
    header("Location: index.php");
}?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <link rel="stylesheet" type="text/css" href="css/tab.css">	
</head>
<body>
<?php include("nav.php"); ?>
<div class="cover">
	<div class="op">		
		<div class="tabsize">
			<div class="container">
  				<ul class="nav nav-tabs">
					<li class="active"><a data-toggle="tab" href="#home">Notice</a></li>
					<li><a data-toggle="tab" href="#menu2">Add member</a></li>
  				</ul>

  				<div class="tab-content">
    				<div id="home" class="tab-pane active">	      
						
    						<div class="notice">
        						<form action="" method="POST">
          							<div class="form-group"  >
			  							<div class="to">
			   								<label> To</label><br>
											<input type="text" name="to" text-align="left"><br>
			  							</div>
										<div class="sub ">	
											<label>Enter Subject Of the notice</label><br>
											<textarea rows="2 auto" cols=" 80 " placeholder="subject" name="subject"></textarea>
										</div><br>
										<div class="txt">
											<label >Enter the content Here</label><br><textarea rows="4 auto" cols="80" placeholder="content" name="content"></textarea><br>
										</div>
										<div class="required">
												<label>Required</label><br>
												<textarea rows="2" cols="100" placeholder="important" name="imp"></textarea><br>
										</div>
        								<div class="subbtn">
            								<input type="submit" class="btn btn-info" name="submit" value="Add Notice" text-align="center">
         
              							</div>
									</div>
								</form>
    						</div>
						
 						<?php
 						include("connection.php");
	  					if (isset($_POST['submit']))
						{
	 						if($_POST['to']=="@gmail.com")
	 					   {	
								date_default_timezone_set("Asia/Calcutta");
								  $date=date('Y/m/d h:i:sa ');
								  $tuser="SELECT user FROM user";
								  $result=mysqli_query($conn,$tuser);
								  while($test=mysqli_fetch_array($result)){
									$ql="insert into notice(touser,subject,date,content,important) 
									values('$test[user]','$_POST[subject]','$date','$_POST[content]','$_POST[imp]')";
									$stmt=mysqli_query($conn,$ql); 
									 if( !$stmt)
									 {
										echo mysqli_error($conn);
									 } 
									else
									{
											?><script>
												alert('value insertedjhhhhh  successfully');
												window.location.href = 'notice.php';
											</script><?php

									}
 							}
		 
						}
	 
						 else
						 {
							 date_default_timezone_set("Asia/Calcutta");
							 $date=date('Y/m/d h:i:sa ');
							 $myString = $_POST['to'] ;
							 $myArray = explode(',', $myString);
							 foreach($myArray as $value)
							 {
									$ql="insert into notice(touser,subject,date,content,important) 
									values('$value','$_POST[subject]','$date','$_POST[content]','$_POST[imp]')";
									$stmt=mysqli_query($conn,$ql); 
									if( !$stmt)
									{
									echo mysqli_error($conn);
									} 
									else
									{
											?><script>
												alert('value inserted successfully');
												window.location.href = 'notice.php';
											</script><?php

									}
 							}
						 }
				}
				mysqli_close($conn);
				?>
	  		</div> 
    		<div id="menu2" class="tab-pane fade">
				<div class="addmem">
            		<form action="afteradmin.php" method="POST" class="form-horizontal">
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
                		<input type="submit" class="btn btn-info" name="submitMEM" value="Add Member"></form></div>
                <?php
				
				 if (isset($_POST['submitMEM']))
				 {
					  include("connection.php");
	 					if(empty($_POST['email'])||empty($_POST['wing'])||empty($_POST['room'])||empty($_POST['ownernm'])||empty($_POST['omob']))
						{
							?><script>
								alert('please enter correct data');
								window.location.href = 'afteradmin.php';
							  </script>
							<?php
	 					}
	 					else
						{
							$qll="insert into members(emailid,wing,roomno,ownernm,renternm,ownermobno,rentermobno,maintainance) 
							values('$_POST[email]',UPPER('$_POST[wing]'),'$_POST[room]',UPPER('$_POST[ownernm]'),UPPER('$_POST[renternm]'),'$_POST[omob]','$_POST[rmob]',UPPER('$_POST[mnt]') )";
							$stm=mysqli_query($conn,$qll); 
							if( !$stm) 
							{
							echo mysqli_error($conn);
							} 
							else
							{
									?><script>
										window.alert('value inserted successfully');
										window.location.href = 'afteradmin.php';
									</script><?php

							}
						}
				 }
				mysqli_close($conn);
        	?> 
		</div>
      
    </div>
   </div>
  </div>

	

	</div></div>
</body>
</html>
