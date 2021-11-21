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

// $sql = "SELECT * FROM persons WHERE name = 'Arif'";
// $sql = "SELECT * FROM persons WHERE age > 22";
// $sql = "SELECT * FROM persons WHERE age BETWEEN 22 AND 24";
// $sql = "SELECT * FROM persons WHERE age IN (22, 24)";
$sql = "SELECT * FROM persons WHERE age >= 22 AND gender = 'Femal'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["name"]. " - Age: " . $row["age"]. " - Gender: " . $row["gender"].  "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>