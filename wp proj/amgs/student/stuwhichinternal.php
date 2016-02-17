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
    <h1 align="center">ATTENDANCE AND MARKS GENERATION SYSTEM</h1>
</kc>
</div>
<marquee style="color:#CF0B0E;font:'Cambria'; width:100; text-height:max-size" bgcolor="#EFE7A6"> A Project on Database Management Systems,Department of ISE, RV College Of Engineering</marquee>

<p align="center">&nbsp;</p>
<div align="center">
  <ul id="MenuBar1" class="MenuBarHorizontal">
  
  </ul>
</div>


<font color="#E13033">
  <style type="text/css">
.myImage1
{
    margin: auto;
    display: block; 
}
</style>

</head>
<body>
    <img src="stu.jpg" alt="My Image" class="myImage1"/>
</body>
<h1 align="center">Welcome, Student</h1>
</font>
<blockquote>
  <p><font color="#E13033"></font></p>
</blockquote>
<font color="#8F078A">
<table align="center">
<tr>
<td>	<h3 align="center"><a href="report.php" target="new" >View first internal report</a></h3> </td>
<td>	<h3 align="center"><a class="btn" href="report.php" target="new" download ><button>Download</button></a></h3> </td>
</tr>

<tr>
<td><h3 align="center"><a href="report2.php" target="new">View second internal report</a></h3> </td>
<td><h3 align="center"><a href="report2.php" target="new" download><button>Download</button></a></h3> </td>
</tr>

<tr>
<td><h3 align="center"><a href="report3.php" target="new">View third internal report</a></h3> </td>
<td><h3 align="center"><a href="report3.php" target="new" download><button>Download</button></a></h3> </td>
</tr>
</table>
<p align="center">&nbsp;</p>

</font>

<blockquote>
  <blockquote>
    <blockquote>
      <font color="#0C44B4">
        <p align="center">&nbsp;</p>
        </font>
        <p align="center">&nbsp; </p>
      </blockquote>
    </blockquote>
  </blockquote>
  <p align="center">&nbsp;</p>
</blockquote>
</body>
</html>
<?php
echo "<a href=\"stulogin.php\">BACK</a>";
?>