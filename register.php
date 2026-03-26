<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "college_guidance";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$marks = $_POST['marks'];

$sql = "INSERT INTO student (name, email, password, marks)
VALUES ('$name', '$email', '$password', '$marks')";

if ($conn->query($sql) === TRUE) {
    echo "Registration Successful!";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();

?>