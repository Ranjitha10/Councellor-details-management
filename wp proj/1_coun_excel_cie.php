<?php
	$conn= mysql_connect("localhost","root","root") or die(mysql_error());
	mysql_select_db("counsellor",$conn);
	
	//go to www and change permission of uploads by ::   chmod 777 uploads
	
	if(isset($_POST['submit']))
	{
		$filename = 'excel-files/'.strtotime("now").'.csv';
		//echo $filename;
		//echo strtotime("now");
		
		
		$sql = mysql_query("select * from sem7") or die(mysql_error());
		$num_rows = mysql_num_rows($sql);
		
		if($num_rows>=1)
		{
		
		$fp = fopen($filename,"w");
		
		$row = mysql_fetch_assoc($sql);
		
		$separator = "";
		$comma = "";
		
		foreach($row as $name => $value)
		{
			$separator .= $comma . '' . str_replace('','""',$name);
			$comma = ",";
		} 
		
		$separator .= "\n";
		
		
		fputs($fp,$separator);
		
		mysql_data_seek($sql,0);
		
		while($row = mysql_fetch_assoc($sql))
		{
		$separator = "";
		$comma = "";
		
		foreach($row as $name => $value)
		{
			$separator .= $comma . '' . str_replace('','""',$value);
			$comma = ",";
		} 
		
		$separator .= "\n";
		
		fputs($fp,$separator);
		}
		
		fclose($fp);
		echo "CSV file generated!!!";
		echo "Check in Excel files folder";
		}
		
		else
		{
			echo "no records in database";
		}	
	}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
</head>


<body bgcolor="white">
<center>	<form method="post" action="1_coun_excel_cie.php">

		<input type="submit" name="submit" value="Submit" />
	</form>
</center>

</body>

</html>
