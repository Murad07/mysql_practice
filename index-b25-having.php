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

$sql = "SELECT COUNT(customerId), country
FROM customer
GROUP BY country
HAVING COUNT(customerId) > 1"; // select all

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    // echo "found";
    echo "ID count: " . $row["COUNT(customerId)"]. " - country: " . $row["country"].  "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>