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

// sql to create table
$sql = "CREATE TABLE customer (
    customerId int NOT NULL,
    customerName varchar(255) NOT NULL,
    country varchar(255),
    PRIMARY KEY (customerId)
)";

if ($conn->query($sql) === TRUE) {
  echo "Table customer created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>