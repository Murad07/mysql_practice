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

// $sql = "SELECT * FROM persons WHERE name REGEXP '^s'"; // Beginning of string
// $sql = "SELECT * FROM persons WHERE name REGEXP 'na$'"; // End of string
// $sql = "SELECT * FROM persons WHERE name REGEXP 'ar|na|'"; // match any pattern 
// $sql = "SELECT * FROM persons WHERE name REGEXP '[ifu]'"; // any character match listed between square brackets 
// $sql = "SELECT * FROM persons WHERE name REGEXP '^[sfu]'"; // beginning with any character match listed between square brackets 
$sql = "SELECT * FROM persons WHERE name REGEXP '[a-r]u'"; // match with in the range 

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["name"]. " - Age: " . $row["age"]. " - city: " . $row["city"]. " - Gender: " . $row["gender"].  "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>