
<?php
//include the following 2 files for phpexcel
/*
require 'Classes/PHPExcel.php';
require_once 'Classes/PHPExcel/IOFactory.php';*/

//Establish connection to mysql
$conn= mysql_connect("localhost","root","root") or die(mysql_error());
mysql_select_db("counsellor",$conn);

//Load file
$path = $_FILES['file']['name'];
$objPHPExcel = PHPExcel_IOFactory::load($path);

//Loop threw file to get data
foreach ($objPHPExcel->getWorksheetIterator() as $worksheet) {
$worksheetTitle     = $worksheet->getTitle();
$highestRow         = $worksheet->getHighestRow(); //$worksheet->getHighestRow(); // e.g. 10
$highestColumn      = $worksheet->getHighestColumn(''); //worksheet->getHighestColumn(''); // e.g 'F'
$highestColumnIndex = PHPExcel_Cell::columnIndexFromString($highestColumn);
$nrColumns = ord($highestColumn) - 64;
//echo "<br>The worksheet ".$worksheetTitle." has ";
//echo $nrColumns . ' columns (A-' . $highestColumn . ') ';
//echo ' and ' . $highestRow . ' row.';
//echo '<br>Data: <table border="1"><tr>';
for ($row = 1; $row <= $highestRow; ++ $row) {
  //  echo '<tr>';
    for ($col = 0; $col < $highestColumnIndex; ++ $col) {
        $cell = $worksheet->getCellByColumnAndRow($col, $row);
        $val = $cell->getCalculatedValue();
        //$dataType = PHPExcel_Cell_DataType::dataTypeForValue($val);
    //    echo '<td>' . $val . '<br></td>';
    }
    //echo '</tr>';
}
//echo '</table>';
}

for ($row = 1; $row <= $highestRow; ++ $row) {
$val=array();
for ($col = 0; $col < $highestColumnIndex; ++ $col) {
$cell = $worksheet->getCellByColumnAndRow($col, $row);
$val[] = $cell->getValue();
}
//Insert data from file to mysql 
$sql="INSERT INTO sem8 VALUES ('".$val[1] . "','" . $val[2] . "','" . $val[3]. "','" . $val[4]. "','" . $val[5]. "')";
//echo $sql."\n";
mysql_query($sql) or die('Invalid query: ' . mysql_error());
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
</head>


<body>
	<form method="post" action="1_excel.php" enctype="multipart/form-data">
		<input type="file" name="file" />
		<br />
		
		<input type="submit" name="submit" value="Submit" />
	</form>

</body>

</html>
