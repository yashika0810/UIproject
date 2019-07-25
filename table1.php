<html>
<head>
<link href="secondpage.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<div class="mainbox">
<div class="banner"><img class="abc" src="twig.jpeg" alt="HTML ICON" width="150px" height="96px"/></</div>
<div class="content">
<h1 class="heading">Customer Table</h1>

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

$sql1="SELECT * FROM register WHERE username='$username' AND password='$password' AND username!=''";
$result1 = $conn->query($sql1);
if ($result1->num_rows > 0)
{
$sql = "SELECT name,phoneno,emailaddress,address1,address2,postcode,city,state,countrycode,dob,dateofanniversary FROM login";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
	echo "<table class='table' border='1' width='99%'  cellpadding='9' cellspacing='0' height='5%'>
	<tr>

<th>Name</th>

<th>Phone no</th>

<th>Email Address</th>

<th>Address1</th>
<th>Address2</th>
<th>Post code</th>
<th>city</th>
<th>State</th>
<th>Country code</th>
<th>DOB</th>
<th>Date of anniversary</th>


</tr>";


    while($row = $result->fetch_assoc()) {
		echo 
		
		"<tr>".
				"<td>".$row["name"]."</td>".
				"<td>".$row["phoneno"]."</td>".
				"<td>".$row["emailaddress"]."</td>".
				"<td>".$row["address1"]."</td>".
				"<td>".$row["address2"]."</td>".
				"<td>".$row["postcode"]."</td>".
				"<td>".$row["city"]."</td>".
				"<td>".$row["state"]."</td>".
				"<td>".$row["countrycode"]."</td>".
				"<td>".$row["dob"]."</td>".
				"<td>".$row["dateofanniversary"]."</td>".
				
			"</tr>";
    }
	echo "</table>";
} else {
    echo "0 results";
}
}

else
{
	header('Location:login1.html');
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


