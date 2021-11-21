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

$sql = "INSERT INTO persons (name, age, city, gender)
VALUES ('Parul', '24', 'Rangpur', 'Femal')";

if ($conn->query($sql) === TRUE) {
  $last_id = $conn->insert_id;
  echo "New record added successfully. Last inserted ID is: " . $last_id;
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>