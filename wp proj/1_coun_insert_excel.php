<?php
	$conn= mysql_connect("localhost","root","root") or die(mysql_error());
	mysql_select_db("counsellor",$conn);
	$x=1;
	if(isset($_POST['submit']))
	{
		$file = $_FILES['file']['tmp_name'];
		
		$handle = fopen($file,"r");
		
		while(($fileop = fgetcsv($handle,1000, ",")) !== false)
		{
			$usn=$fileop[0];
			$sub=$fileop[1];
			$cie1=$fileop[2];
			$cie2=$fileop[3];
			$cie3=$fileop[4];
			if($x!=1)
			{
			$sql = mysql_query("insert into sem7 values ('$usn','$sub',$cie1,$cie2,$cie3)");
			}
			$x=0;		
			
		}
		if($sql)
		{
			echo "Data uploaded succesfully!!!!";
		}
		else
		{
			echo "please enter csv file ";
		}	
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
</head>

<body bgcolor="white">
	<center>
	<form method="post" action="1_coun_insert_excel.php" enctype="multipart/form-data">
		<input type="file" name="file" />
		<br />
		
		<input type="submit" name="submit" value="Submit" />
	</form>
	</center>

</body>
</html>
