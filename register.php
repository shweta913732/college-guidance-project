<?php

$host = "YOUR_HOST";
$dbname = "YOUR_DATABASE";
$username = "YOUR_USERNAME";
$password = "YOUR_PASSWORD";

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Connected successfully";

} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

?>