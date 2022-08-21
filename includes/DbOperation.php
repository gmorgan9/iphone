<?php

include("/Config.php");

  

$sql = "INSERT INTO team(name, member) values(?, ?)";

if (mysqli_query($conn, $sql)) {
  return true;
} else {
  return false;
}

mysqli_close($conn);