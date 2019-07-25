<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "customerdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$name=$_POST['username'];
$passward=$_POST['password'];
$sql = "INSERT INTO register ( username, password)
						VALUES ('$name', '$passward')";
						

if ($conn->query($sql) === TRUE) {
    
		header('location:login.html');
		
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
		     
?>