
<html>
<body>
<?php

 $servername = "localhost";
$username = "root";
$password = "root";
$dbname = "amgs";

// Create connection

$conn = new mysqli($servername, $username, $password,$dbname);


// Check connection

if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}
 
echo "Connected successfully\n";


 $Management_and_Organisational_Behaviour=$_POST["Management_and_Organisational_Behaviour"];
$SE=$_POST["Software Engineering"];
$CNS=$_POST["Computer Networks and Security"];
$DBMS=$_POST["Database Management Systems"];
$electivec=$_POST["electivec"];
$electived=$_POST["electived"];
//$ph_no=$_POST["ph_no"];
$usn=$_POST["USN"];
//$emailid=$_POST["emailid"];
echo "\n \n ".$usn."\n\n";


$q="UPDATE internal1 SET Management_and_Organisational_Behaviour='$Management_and_Organisational_Behaviour', gender='$gender', email_id='$email_id', address=\"$address\", year=$year, sem=$sem, ph_no=$ph_no WHERE USN='$usn'";

if($conn->query($q)==TRUE)

{
echo "new data entered";
}

else
{
echo "Error: " . $q . "<br>" . $conn->error;}


header("location:edit.php");


?>
</body>
<html>
