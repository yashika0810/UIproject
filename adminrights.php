<html>
<head>
<link href="secondpage.css" rel="stylesheet" type="text/css"/>
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


$sql = "UPDATE register SET status='1' WHERE username='$username'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}
?> 
</div>
<div class="line"><p class="head">Copyright © 2018 Twig - The Flower Studio - All Rights Reserved.</p>
<p class="head2">Powered by GoDaddy GoCentral Website Builder</p></div>
</div>
</body>
</html>
</body>
</html>


