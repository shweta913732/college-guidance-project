<?php

$conn = new mysqli("localhost","root","","college_guidance");

$college = $_GET['college'];
$course = $_GET['course'];

$sql = "INSERT INTO applications (college_name, course)
VALUES ('$college','$course')";

if ($conn->query($sql) === TRUE) {
    echo "Application Submitted Successfully!";
    header("refresh:2; url=colleges.php");
} else {
    echo "Error: " . $conn->error;
}

$conn->close();

?>