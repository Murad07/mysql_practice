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

$sql = "SELECT * FROM persons"; // select all
// $sql = "SELECT id, name, age FROM persons"; // select specific column, you should remove Gender from while loop to avoid warning
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