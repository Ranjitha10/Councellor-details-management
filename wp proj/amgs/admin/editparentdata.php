
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
$email_id=$_POST["email_id"];
$address=$_POST["address"];
$ph_no=$_POST["ph_no"];

//$emailid=$_POST["emailid"];
echo "\n \n ".$name."\n\n";


$q="UPDATE parent SET name='$name',email_id='$email_id',address=\"$address\", ph_no=$ph_no WHERE name='$name'";

if($conn->query($q)==TRUE)

{
echo "new data entered";
}

else
{
echo "Error: " . $q . "<br>" . $conn->error;}


header("location:editparent.php");


?>
</body>
<html>
