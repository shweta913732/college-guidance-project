<?php

$host = "YOUR_HOST";
$user = "YOUR_USER";
$password = "YOUR_PASSWORD";
$database = "YOUR_DATABASE";
$port = 3306; // or use Railway port if given

$conn = new mysqli($host, $user, $password, $database, $port);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// get form data
$name = $_POST['name'];
$group = $_POST['group_name'];
$marks = $_POST['marks'];

// insert data
$sql = "INSERT INTO students (name, group_name, marks) VALUES ('$name', '$group', '$marks')";

if ($conn->query($sql) === TRUE) {
    echo "Registration Successful 🎉";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();

?>