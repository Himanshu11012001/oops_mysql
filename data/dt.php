<?php
$servername = "localhost";
$username = "root";
$password = "I95dev@123";
$dbname = "Dhote";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {

  die("Connection failed: " . $conn->connect_error);
  
}


$sql = "DELETE FROM Student WHERE id=3";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>