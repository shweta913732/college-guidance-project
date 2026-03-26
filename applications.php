<?php

$conn = new mysqli("localhost","root","","college_guidance");

$sql = "SELECT * FROM applications";
$result = $conn->query($sql);

echo "<h2>Applied Colleges</h2>";

while($row = $result->fetch_assoc()){

echo "College Name: ".$row['college_name']."<br>";
echo "Course: ".$row['course']."<br><br>";

}

$conn->close();

?>