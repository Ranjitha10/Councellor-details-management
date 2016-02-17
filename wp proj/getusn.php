<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
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
					
$result1=$con->query("SELECT * FROM counsellor.staff WHERE name = '".$q."'");
$row1=$result1->fetch_array(MYSQLI_ASSOC);
$p=$row1["batch"];
$result2=$con->query("SELECT * FROM counsellor.student1 WHERE batch = '".$p."'");

echo "Batch : $p";
echo "<table>
<tr>
<th>Name</th>
<th>DOB</th>
<th>Sex</th>
<th>YOA</th>
<th>USN</th>
<th>Email</th>
<th>Phone</th>
<th>Address</th>
<th>Mode</th>
<th>Rank</th>
<th>F_name</th>
<th>F_id</th>
<th>F_no</th>
<th>M_name</th>
<th>M_id</th>
<th>M_no</th>
</tr>";

if ($result2->num_rows == 0) {
echo "No Data";}
else{
while($row=$result2->fetch_array(MYSQLI_ASSOC)){

   echo "<tr>";
    echo "<td>" .$row["name"]. "</td>";
    echo "<td>" .$row["dob"]. "</td>";
    echo "<td>" .$row["sex"]. "</td>";
    echo "<td>" .$row["yoa"]. "</td>";
    echo "<td>" .$row["usn"]. "</td>";
    echo "<td>" .$row["e_id"]. "</td>";
    echo "<td>" .$row["phone"]. "</td>";
    echo "<td>" .$row["address"]. "</td>";
	echo "<td>" .$row["adm_type"]. "</td>";
    echo "<td>" .$row["rank"]. "</td>";
    echo "<td>" .$row["f_name"]. "</td>";
    echo "<td>" .$row["f_id"]. "</td>";
	echo "<td>" .$row["f_no"]. "</td>";
    echo "<td>" .$row["m_name"]. "</td>";
    echo "<td>" .$row["m_id"]. "</td>";
    echo "<td>" .$row["m_no"]. "</td>";
    echo "</tr>";
}}
echo "</table>";
mysqli_close($con);
?>
</body>
</html>
