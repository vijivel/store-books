<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "collection";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$number = $_POST['number'];

// SQL to insert data into table
$sql = "INSERT INTO users (username, email, password, number) VALUES ('$username', '$email', '$password', '$number')";

if ($conn->query($sql) === TRUE) {
    echo "Registration successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
