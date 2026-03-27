<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "college_guidance";

<?php

$host = "YOUR_HOST";
$dbname = "YOUR_DATABASE";
$username = "YOUR_USERNAME";
$password = "YOUR_PASSWORD";

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

?>

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