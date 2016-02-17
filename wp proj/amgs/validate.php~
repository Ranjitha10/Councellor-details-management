<?php
session_start();
$_SESSION['err'] = 0;
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<title>Home</title>


<style type="text/css">
<!--
.bbbb {
	background-attachment: scroll;
	background-image: url(back.jpg);
	background-repeat: no-repeat;
	font-size: large;
}

kc#libhead {
	font-family: Lucinda Constantia, "Lucida Bright", "DejaVu Serif", Georgia, serif;
	font-weight: bolder;
	color: maroon;
	font-size: x-large;
	position: relative;
	word-spacing: 1em;
}



-->
</style>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />


</head>

<body class ="bbbb"  >



<div>
  <kc  id = "libhead"  align="center" >
    <h1 align="center"></h1>
</kc>
</div>
<p align="center">&nbsp;</p>
<div align="center">
  <ul id="MenuBar1" class="MenuBarHorizontal"></ul>
</div>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>

  <?php	

$con = mysqli_connect("localhost","root","","amgs"); 
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$USN=$_REQUEST['uname']; 
$password=$_REQUEST['pass']; 


// To protect MySQL injection (more detail about MySQL injection)
//$USN = stripslashes($email);
//$password = stripslashes($password);


$sql="SELECT USN FROM student WHERE USN='$USN' and password='$password'";

$result=mysqli_query($con,$sql);
  
// Mysql_num_row is counting table row
$count=mysqli_num_rows($result);
// Mysql_num_row is counting table row


if($count==1)
{
  
  //this is admin
    $row=mysqli_fetch_assoc($result);
    //session_regenerate_id();
    $_SESSION['USN'] =$USN;
  
// Register $myusername, $mypassword and redirect to file "login_success.php
header('Refresh:0,url= student/index.php');

}
else
{
  


//$sql1="SELECT name FROM system_user WHERE email_id='$email' and password_s='$password'";
$sql1="SELECT USN FROM student WHERE USN='$USN' and password='$password'";



$result1=mysqli_query($con,$sql1);
// Mysql_num_row is counting table row
$count1=mysqli_num_rows($result1);



// Mysql_num_row is counting table row
if($count1==1)
{

// Register $myusername, $mypassword and redirect to file "login_success.php"8

  //this is suser
    $row=mysqli_fetch_assoc($result1);
    $_SESSION['USN'] =$USN;
  
//header("Location:stuwhichinternal.php");
}

else {function myFunction() {
    alert("welcome to feedback page");
}
echo "Wrong Username or Password";
}


}


//$con->close();
?>
</p>
<p>&nbsp;</p>
<p>&nbsp;</p>

</body>
</html>