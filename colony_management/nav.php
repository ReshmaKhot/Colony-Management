<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        

.navbar.navbar-fixed-top.navbar-inverse{
	 background-color:#666666;
    border-bottom:0px;
	
 }
.red {
  color: #3385ff;
}
#myNavbar li a {
    color: #00ccff;!important; 
}		
#myNavbar li a:link {
    color: #ffffff !important; 
}
#myNavbar li a:hover{
    color: #3385ff; 
}
#myNavbar li a:visited{
    color: #00cc00;
}
		
#myNavbar li :active{
    color: #00cc00;
}
#myNavbar:active {
    color: #ffffff;
	background-color:#232323;
}
		#myNavbar :focus{
    color: #ffffff;
	background-color:#232323;
}
		
		.nav.navbar.active { background:blue }
.nav{
	padding-bottom :0px;
    text-align:center;
    margin-bottom: 20px;
	color:#000000;
	height:30px;
	font-size:relative;
	}
.op.dropdown-menu li a: {
    color: #000000 !important; 
}
		
        
    </style>
</head>
<body>
<nav class="navbar navbar-fixed-top navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php" id="myNavbar" ><span class="red">Aahina</span></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li ><a href="tab.php">Home</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="members.php" >Members<span class="caret" ></span></a>
          
          <ul class="dropdown-menu op" id="myNavbar">
			   <li><a href="members.php">All Members</a></li>
            <li><a href="A.php">A Wing</a></li>
            <li><a href="B.php">B wing</a></li>
            <li><a href="#">C wing</a></li>
            <li><a href="#">D wing</a></li>
            <li><a href="#">E wing</a></li>
            <li><a href="#">f wing</a></li>   
                </ul>
        </li>
        <li><a href="notice.php">Notices</a></li>   
        <li><a href="admincomplaint.php">Complaint Box</a></li>   
      </ul>
      <ul class="nav navbar-nav navbar-right">
       <!--<input type="submit" align="center" id="btn" value="submit" name="logout" >-->
          <li><a href="adminlogout.php">Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
    </body>
</html>