<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 80%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
$q = $_REQUEST["q"];

//$q = intval($_GET['q']);
					$servername = "localhost";
					$username = "root";
					$password = "root";
					$dbname = "counsellor";

					// Create connection
					$con = new mysqli($servername, $username, $password, $dbname);
					// Check connection
					if ($con->connect_error) {
    						die("Connection failed: " . $conn->connect_error);
					}
					
$result1=$con->query("SELECT * FROM counsellor.student1 WHERE name = '".$q."'");
$row1=$result1->fetch_array(MYSQLI_ASSOC);
$p=$row1["batch"];
$result2=$con->query("SELECT * FROM counsellor.staff WHERE batch = '".$p."'");

echo "<table>
<tr>
<th>Name</th>
<th>USN</th>
<th>Batch</th>
<th>Email</th>
<th>Phone</th>
<th>Counsellor</th>
</tr>";

if ($result2->num_rows == 0) {
echo "No Data";}
else{
while($row=$result2->fetch_array(MYSQLI_ASSOC)){
   echo "<tr>";
    echo "<td>" .$row1["name"]. "</td>";
    echo "<td>" .$row1["usn"]. "</td>";
	echo "<td>" .$row1["batch"]. "</td>";
    echo "<td>" .$row1["e_id"]. "</td>";
    echo "<td>" .$row1["phone"]. "</td>";
    echo "<td>" .$row["name"]. "</td>";
    echo "</tr>";
}}
echo "</table>";
mysqli_close($con);
?>
</body>
</html>
