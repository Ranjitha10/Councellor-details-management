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

// = intval($_GET['q']);

//$q = $_GET['q'];



$con = mysqli_connect("localhost","root","root","amgs");

    //if (!$con) {
    //die('Could not connect: ' . mysqli_error($con));
//}

$q = strval($_GET['q']);
mysqli_select_db($con,"amgs");
$sql="SELECT * FROM student WHERE USN='$q'";

$result = mysqli_query($con,$sql);

echo "<table>
<tr>
<th>name</th>
<th>USN</th>
<th>gender</TH>
<th>email_id</th>
<th>address</th>
<th>year</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['USN'] . "</td>";
    echo "<td>" . $row['gender'] . "</td>";
    echo "<td>" . $row['email_id'] . "</td>";
    echo "<td>" . $row['address'] . "</td>";
    echo "<td>" . $row['year']."</td>";
    echo "</tr>";
}


echo "</table>";
mysqli_close($con);
?>
</body>
</html>
