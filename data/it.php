<?php
$servername = "localhost";
$username = "root";
$password = "I95dev@123";
$dbname = "Dhote";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO Student (firstname, lastname, email)
VALUES ('himanshu ', 'Dhote', 'himanshudhote@gmail.com')";
$sql = "INSERT INTO Student (firstname, lastname, email)
VALUES ('himanshu ', 'Dhote', 'himanshudhote@gmail.com')";
$sql = "INSERT INTO Student (firstname, lastname, email)
VALUES ('himanshu ', 'Dhote', 'himanshudhote@gmail.com')";
$sql = "INSERT INTO Student (firstname, lastname, email)
VALUES ('himanshu ', 'Dhote', 'himanshudhote@gmail.com')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>