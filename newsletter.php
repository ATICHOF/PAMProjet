<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "pampr";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
if (isset($_POST['inscrire'])){
	$email  =  $_POST['email'];

$sql = "INSERT INTO nwmail (email)
VALUES ('$email')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}

$conn->close();
?>