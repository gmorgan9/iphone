<?php
$servername = "localhost";
$username = "root";
$password = "BIGmorgan1999!";
$dbname = "iphone";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Success";

//getting values
$teamName = $_POST['name'];
$memberCount = $_POST['member'];

$sql = "INSERT INTO team(name, member) values('$teamName', '$memberCount')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>