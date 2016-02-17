<?php
	$con=mysqli_connect("localhost","root","","test");
	if($con)
		echo "success<br>";
//$query
	
	$fname=$_FILES['file']['name'];
	if(!isset($fname))
	{
		echo "File not able to upload!Please try again!";
	}
	else if ($_FILES["file"]["error"] > 0) {
		echo "Error: " . $_FILES["file"]["error"] . "<br>";
	} 
	else 
	{
		$con=mysqli_connect("localhost","root","","test");
		$ext = pathinfo($fname, PATHINFO_EXTENSION);
		$temp="details".".".$ext;
		$mov=move_uploaded_file($_FILES['file']['tmp_name'],"uploads/$temp");
		//save and rename files to a new folder 

		include 'Classes/PHPExcel/IOFactory.php';
		
		$inputFileType = 'Excel2007';
			//$sem=$_POST["sem"];
			$fname=$_FILES['file']['name'];
			$ext = pathinfo($fname, PATHINFO_EXTENSION);
			$temp="details".".".$ext;
			//get file from the saved folder
						
			$objReader = PHPExcel_IOFactory::createReader($inputFileType);
			$objPHPExcel = $objReader->load("uploads/".$temp);
			$sheet=$objPHPExcel->setActiveSheetIndex(0);
			$highestRow = $sheet->getHighestRow();
			for($row=2;$row<=$highestRow;$row++)
			{
				$id=$sheet->getCellByColumnAndRow(0, $row)->getValue();
				$name=$sheet->getCellByColumnAndRow(1, $row)->getValue();
				$email=$sheet->getCellByColumnAndRow(2, $row)->getValue();
				$query="INSERT INTO csv VALUES($id,'$name','$email')";
				$check=mysqli_query($con,$query);
				if($check)
					echo "success<br>";
				else
					echo"Fail<br>";
				echo $name."  ".$email."<br>";
			}
	}

	?>