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
VALUES ('Faruk', '23', 'Rangpur', 'Male'), ('Rina', '26', 'Khulna', 'Femal')";

if ($conn->query($sql) === TRUE) {
  echo "New record added successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>