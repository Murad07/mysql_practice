<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE persons SET age = 21 WHERE id = 1"; 

$result = $conn->query($sql);

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
  } else {
    echo "Error updating record: " . $conn->error;
  }
$conn->close();
?>