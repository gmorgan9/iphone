<?php
$servername = "localhost";
$username = "root";
$password = "BIGmorgan1999!";
$database = "iphone";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>