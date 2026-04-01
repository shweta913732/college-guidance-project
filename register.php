<?php

$host = "YOUR_HOST";
$dbname = "YOUR_DATABASE";
$username = "YOUR_USERNAME";
$password = "YOUR_PASSWORD";

$conn = mysqli_connect($host, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// optional (for testing)
echo "Connected successfully";