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

$sql = "SELECT orders.OrderID, customer.customerName
FROM orders
LEFT JOIN customer ON orders.customerId=customer.customerId"; // select all

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    // echo "found";
    echo "OrderID: " . $row["OrderID"]. " - customerName: " . $row["customerName"].  "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>