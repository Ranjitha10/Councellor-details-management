<?php
	$conn= mysql_connect("localhost","root","root") or die(mysql_error());
	mysql_select_db("csv",$conn);
	
	if(isset($_POST['submit']))
	{
		$file = $_FILES['file']['tmp_name'];
		
		$handle = fopen($file,"r");
		
		while(($fileop = fgetcsv($handle,1000, ";")) !== false)
		{
			$first_name=$fileop[0];
			$last_name=$fileop[1];
			$email=$fileop[2];
			
			$sql = mysql_query("insert into test (first_name,last_name,email) values ('$first_name','$last_name','$email')");
			
			if($sql)
			{
				echo "data uploaded successfull";
			}
			
			else
			{
				echo "fail";
			}	
			
		}
	}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
</head>


<body>
	<form method="post" action="index.php" enctype="multipart/form-data">
		<input type="file" name="file" />
		<br />
		
		<input type="submit" name="submit" value="Submit" />
	</form>

</body>

</html>
