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
$sql = "CREATE TABLE orders (
    OrderID int NOT NULL,
    OrderNumber int NOT NULL,
    customerId int,
    PRIMARY KEY (OrderID),
    FOREIGN KEY (customerId) REFERENCES customer(customerId)
);";

if ($conn->query($sql) === TRUE) {
  echo "Table order created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>