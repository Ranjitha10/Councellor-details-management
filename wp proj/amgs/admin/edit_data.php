
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


 $name=$_POST["name"];
$gender=$_POST["gender"];
$email_id=$_POST["email_id"];
$address=$_POST["address"];
$year=$_POST["year"];
$sem=$_POST["sem"];
$ph_no=$_POST["ph_no"];
$usn=$_POST["USN"];
//$emailid=$_POST["emailid"];
echo "\n \n ".$usn."\n\n";


$q="UPDATE student SET name='$name', gender='$gender', email_id='$email_id', address=\"$address\", year=$year, sem=$sem, ph_no=$ph_no WHERE USN='$usn'";

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
