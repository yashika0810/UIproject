<html>
<head>
<link href="secondpage.css" rel="stylesheet" type="text/css"/>
<style>
.box1{
	width:250px;
	height:40px;
	margin-left:550px;
	margin-top:250px;
	
}
.box2{
	width:90px;
	height:25px;
	
	color:white;
	margin-left:630px;
	margin-top:10px;
	 background: #67696d;
}
box2:hover {
    background-color: yellow;
}

.head{
	font-size:30px;
	color:#67696d;
	margin-left:500px;
	

	
}
	
	
</style>

</head>
<body>
<div class="mainbox">
<div class="banner"><img class="abc" src="twig.jpeg" alt="HTML ICON" width="150px" height="96px"/></</div>
<div class="content">
<h1 class="heading">Control Panel</h1>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "customerdb";
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$username=$_POST['username'];
$password=$_POST['password'];


$sql = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

   ?>
   <form action="adminrights.php" method="post">
   <h1 class="head">ALLOW ACCESS TO USER</h1>
   <input class="box1" type="text" name="username" placeholder="Enter username"><br><br><br>
   <input class="box2" type="submit" name="submit">
   </form>
   
   <?php

}
else
{
	header('Location:admin.html');
}


$conn->close();
?> 
</div>
<div class="line"><p class="head">Copyright © 2018 Twig - The Flower Studio - All Rights Reserved.</p>
<p class="head2">Powered by GoDaddy GoCentral Website Builder</p></div>
</div>
</body>
</html>
</body>
</html>


