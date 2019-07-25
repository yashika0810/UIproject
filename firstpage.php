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
$name=$_POST['name'];
$phone=$_POST['phoneno'];
$emailaddress=$_POST['emailaddress'];
$address=$_POST['address1'];
$addresss=$_POST['address2'];
$postcodee=$_POST['postcode'];
$cityy=$_POST['city'];
$state=$_POST['state'];
$country=$_POST['countrycode'];
$dobb=$_POST['dob'];
$dob=$_POST['dateofanniversary'];

$sql = "INSERT INTO login (name,phoneno,emailaddress,address1,address2,postcode,city,state,countrycode,dob,dateofanniversary)
						VALUES('$name','$phone','$emailaddress','$address','$addresss','$postcodee','$cityy','$state','$country','$dobb','$dob')";
						

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>