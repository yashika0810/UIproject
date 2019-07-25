<html>
<head>
<link href="secondpage.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<div class="mainbox">
<div class="banner"><img class="abc" src="twig.jpeg" alt="HTML ICON" width="150px" height="96px"/></</div>
<div class="content">
<h1 class="heading">Upcoming Birthdays</h1>

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

$sql1="SELECT * FROM register WHERE username='$username' AND password='$password' AND username!='' AND status!='0'";
$result1 = $conn->query($sql1);





if ($result1->num_rows > 0)
{
	
	
$sql = "SELECT name,dob,emailaddress FROM login";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
	echo "<table class='table' border='1' width='99%'  cellpadding='9' cellspacing='0' height='5%'>
	<tr>

<th>Name</th>
<th>Email Address</th>

<th>DOB</th>


</tr>";


    while($row = $result->fetch_assoc()) {
		 
		
		
				$dateyear=date('Y-m-d');
				$year=date('Y');
				$timestamp = strtotime("$row[dob]");

$day = date('d', $timestamp);
$month = date('m', $timestamp);
$fulldate=$year."-".$month."-".$day;

$datetime1 = date_create("$dateyear");
$datetime2 = date_create("$fulldate");
if(strtotime("$dateyear") <= strtotime("$fulldate"))
{
	$datediff=date_diff($datetime1,$datetime2);
	$dd=$datediff->format('%a');
	if(($dd<=3) && ($dd>=1))
	{
			echo "<td>".$row["name"]."</td>".
				"<td>Your Birthday in</td>".
				"<td>".$dd." days</td>".
			"</tr>";
	}
	
	else if($dd==0)
	{
		echo "<td>".$row["name"]."</td>".
				"<td><img src='birthday.jpg'></td>".
				"<td>Today is your Birthday</td>".
			"</tr>";

			$headers = 'From: <sanjay@sanjaywebdesigner.com>' . "\r\n";
$to=$row['emailaddress'];
$subject="Birthday Wish";
$message="happy birthday ".$row["name"];

mail($to,$subject,$message,$headers);

	}
	
    }
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


