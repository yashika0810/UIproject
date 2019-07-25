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
$fn=$_POST['firstname'];
$ln=$_POST['lastname'];
$name=$_POST['username'];
$passward=$_POST['password'];
$passward1=$_POST['confirmpassword'];
$sql = "INSERT INTO register ( firstname,lastname,username, password,confirmpassword,status)
						VALUES ('$fn','$ln','$name', '$passward','$passward1','0')";
						

if ($conn->query($sql) === TRUE) {
    
		header('location:login4.html');
		
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
		     
?>