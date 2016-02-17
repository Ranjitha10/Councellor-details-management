
<?php
require_once 'Excel/reader.php';
$data = new Spreadsheet_Excel_Reader();
$data->setOutputEncoding('CP1251');
$data->read('Untitled1.xls');
 
$conn = mysql_connect("localhost","root","root");
mysql_select_db("counsellor",$conn);
 
for ($x = 2; $x < = count($data->sheets[0]["cells"]); $x++) {
    $name = $data->sheets[0]["cells"][$x][1];
    $extension = $data->sheets[0]["cells"][$x][2];
    $email = $data->sheets[0]["cells"][$x][3];
    $sql = "INSERT INTO sem8 (cie1,cie2,cie3) 
        VALUES ($name,$extension,$email)";
    echo $sql."\n";
    mysql_query($sql);
}
?>
