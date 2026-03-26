<?php

$conn = new mysqli("localhost","root","","college_guidance");

if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM colleges";
$result = $conn->query($sql);

echo "<h2>Available Colleges</h2>";

echo "<table border='1' cellpadding='10'>";
echo "<tr>
<th>College Name</th>
<th>Course</th>
<th>Cutoff Marks</th>
<th>Apply</th>
</tr>";

while($row = $result->fetch_assoc()){

if($row['college_name'] != "" && $row['course'] != ""){

echo "<tr>";
echo "<td>".$row['college_name']."</td>";
echo "<td>".$row['course']."</td>";
echo "<td>".$row['cutoff_marks']."</td>";
echo "<td><a href='apply.php?college=".$row['college_name']."&course=".$row['course']."'>Apply</a></td>";
echo "</tr>";

}

}

echo "</table>";

$conn->close();

?>