<?php
$servername = "localhost:3306";
$username = "emem";
$password = "pass";
$dbname = "ememtony";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";



$sql = "SELECT id, firstname, surname, age, gender aboutme";
  $result = $conn -> query($sql);

  echo  print_r($result, true);

  $conn -> close();
?>