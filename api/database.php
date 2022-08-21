<?php
$servername = "Localhost";
$username = "root";
$password = "BIGmorgan1999!";
$dbname = "iphone";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$response = [];
echo "here";
if($_SERVER['REQUEST_METHOD']=='POST'){
    echo "there";
//getting values
$teamName = $_POST['name'];
$memberCount = $_POST['member'];

$sql = "INSERT INTO team(name, member) values('$teamName', '$memberCount')";

if (mysqli_query($conn, $sql)) {

        $response['error']=false;
        $response['message']='Team added successfully';
    }else{

        $response['error']=true;
        $response['message']='Could not add team';
    }

}else{
    $response['error']=true;
    $response['message']='You are not authorized';
}

mysqli_close($conn);
?>