<?php

$servername = "database";
$username = "root";
$password = "root";
$dbname = "insert";

// Create connection
$conn = new mysqli($servername,
	$username, $password, $dbname);

// Check connection
if($conn === false){
  die("ERROR: Could not connect. "
      . mysqli_connect_error());
}

?>