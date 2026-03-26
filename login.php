<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "college_guidance";

$conn = new mysqli($servername, $username, $password, $database);

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM student WHERE email='$email' AND password='$password'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    header("Location: colleges.php");
    exit();
} else {
    echo "Invalid Email or Password";
}

$conn->close();

?>