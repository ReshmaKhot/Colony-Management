<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" type="text/css" href="css/afteradmin.css">
    </head>
<body>     

<div class="memtxt">Add NOTICE</div>
<div class="note1">
    <div class="notice">
        <form action="" method="POST">
          <div class="form-group"  >
			  <div class="to">
			   <label> To</label><br>
			<input type="text" name="to" text-align="left"><br>
			  </div>
        <div class="sub ">	
            <label>Enter Subject Of the notice</label><br>
          
            <textarea rows="2" cols="100" placeholder="subject" name="subject"></textarea>
        </div><br>
    
              
        <div class="txt">
            <label >Enter the content Here</label><br><textarea rows="auto" cols="auto" placeholder="content" name="content"></textarea><br>
        </div>
            <!--<div class="required">
                <label>Required</label><br>
                <textarea rows="2" cols="100" placeholder="important" name="imp"></textarea><br>
              </div>-->
        <div class="subbtn">
            <input type="submit" class="btn btn-info" name="submit" value="Add Notice">
         
              </div></div></form>
    </div>
	</div>
 <?php
 include("connection.php");
	  
 if (isset($_POST['submit'])) {

	 if($_POST['to']=="@gmail.com")
	 {	 date_default_timezone_set("Asia/Calcutta");
	  $date=date('Y/m/d h:i:sA');
	  $DateT = date('h:i A', strtotime($date));
		 $tuser="SELECT user
			 FROM user";
		 $result=mysqli_query($conn,$tuser);
		while($test=mysqli_fetch_array($result)){
$ql="insert into notice(touser,subject,date,content) 
values('$test[user]','$_POST[subject]','DATE_FORMAT($date "%p")','$_POST[content]')";
$stmt=mysqli_query($conn,$ql); 
if( !$stmt) {
echo mysqli_error($conn);
} 
else
{
		?><script>
            //alert('value insertedjhhhhh  successfully');
            window.location.href = 'notice.php';
        </script><?php
		
}
 }
		 
	 }
	 
	 else{
	 
	 date_default_timezone_set("Asia/Calcutta");
	 $date=date('Y/m/d h:i:sa ');
	 $myString = $_POST['to'] ;
	 $myArray = explode(',', $myString);
	 foreach($myArray as $value){
$ql="insert into notice(touser,subject,date,content) 
values('$value','$_POST[subject]','DATE_FORMAT('$date %p')','$_POST[content]')";
$stmt=mysqli_query($conn,$ql); 
if( !$stmt) {
echo mysqli_error($conn);
} 
else
{
		?><script>
            //alert('value inserted successfully');
            window.location.href = 'notice.php';
        </script><?php
		
}
 }}}
mysqli_close($conn);
?>
	</body>
</html>