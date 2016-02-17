<html>
    <head>
		<title>FEE Details</title>
    </head>
        <br>
		<br>
		<br>
<body bgcolor=white>

<center>
     <form action="xmlfee.php" method="GET">
	 <font color=black size=6>Enter USN:</font></td><td>
	 <select id="text" name="usn"/>
					
					<option value='-1'>Select</option> 
					
					<?php
					
					session_start();
					$u_name=$_SESSION["name1"];
					//echo $u_name;
					
					$servername = "localhost";
					$username = "root";
					$password = "root";
					$dbname = "counsellor";

					// Create connection
					$conn = new mysqli($servername, $username, $password, $dbname);
					// Check connection
					if ($conn->connect_error) {
    						die("Connection failed: " . $conn->connect_error);
					}
					
					$result3=$conn->query("select * from counsellor.staff");
					$result4=$conn->query("select * from counsellor.student1");
					
				while($row3=$result3->fetch_array(MYSQLI_ASSOC))
				{
					if(strcmp($u_name,$row3["name"])==0)
					{
						while($row4=$result4->fetch_array(MYSQLI_ASSOC))
						{	
							if($row3["batch"]==$row4["batch"])
							{
					
					
					?>
						<option value="<?php echo $row4['usn'];?>"><?php echo $row4['usn'];?></option>
					
					
					<?php
					
							}
						}
					}
				}
						?>
					</select>
					<br>
					<br><br><br>
					<input type=submit value="submit" onsubmit=function()></input>
					</form>
					<div id="txtHint"><p size="24">Student FEE Details:</p></div>
	
					
	<center>
	<script>
	header("location:xmlfee.php");
	</script>
	<br>
	<br>
	<br>
	<br>
	</body>
</html>
