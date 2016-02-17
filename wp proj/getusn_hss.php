<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 70%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body bgcolor=white>

<?php
$q = $_REQUEST["q"];
$tot=0;
$n = 0;
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
					

$result=$con->query("SELECT * FROM counsellor.hss WHERE usn = '".$q."'");

echo "<table>
<tr>
<th>Sem</th>
<th>Event</th>
<th>Start Date</th>
<th>End Date</th>
<th>Category</th>
<th>Score</th>
</tr>";

if ($result->num_rows == 0) {
echo "No Data";}
else{
while($row=$result->fetch_array(MYSQLI_ASSOC)){
  
   echo "<tr>";
    echo "<td>" .$row["sem"]. "</td>";
	echo "<td>" .$row["event"]. "</td>";
    echo "<td>" .$row["start"]. "</td>";
    echo "<td>" .$row["end"]. "</td>";
    echo "<td>" .$row["category"]. "</td>";
	if($row["category"]=='Internship')
	{ $val=90; $tot+=$val; $n++; echo "<td>".$val."</td>";}
	if($row["category"]=='Training')
	{ $val=75; $tot+=$val; $n++;  echo "<td>".$val."</td>";}
	if($row["category"]=='Workshop')
	{ $val=80; $tot+=$val; $n++;  echo "<td>".$val."</td>";}
	if($row["category"]=='NCC')
	{ $val=90; $tot+=$val;$n++;  echo "<td>".$val."</td>";}
	if($row["category"]=='Paper presentation')
	{ $val=95; $tot+=$val; $n++;  echo "<td>".$val."</td>";}
	if($row["category"]=='Coordinating the event')
	{ $val=70; $tot+=$val; $n++;  echo "<td>".$val."</td>";}
	if($row["category"]=='Participating in the event')
	{ $val=55; $tot+=$val; $n++; echo "<td>".$val."</td>";}
	if($row["category"]=='Others')
	{ $val=50; $tot+=$val; $n++; echo "<td>".$val."</td>";}
	 echo "</tr>";
	
}}
echo "<br>";
echo "</table>";
?>
<br><br>
<br>
<?php
$avg = ($tot/$n);
echo "Grade Score = $avg";
?>
<br><br>
<?php
if($avg>=90){
echo "Grade = S ";}
if($avg<90 && $avg>=75){
echo "Grade = A ";}
if($avg<75 && $avg>=60){
echo "Grade = B ";}
if($avg<60 && $avg>=50){
echo "Grade = C ";}
if($avg<50)
{echo "Grade = D ";
}
mysqli_close($con);
?>
</body>
</html>
