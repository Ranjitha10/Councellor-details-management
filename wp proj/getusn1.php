<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
$q = $_REQUEST["q"];

//$q = intval($_GET['q']);
					$servername = "localhost";
					$username = "root";
					$password = "root";
					$dbname = "counsellor";

					// Create connection
					$con = new mysqli($servername, $username, $password, $dbname);
					// Check connection
					if ($con->connect_error) {
    						die("Connection failed: " . $conn->connect_error);
					}
					

$result=$con->query("SELECT * FROM counsellor.student1 WHERE usn = '".$q."'");



if ($result->num_rows == 0) {
echo "No Data";}
else{
while($row=$result->fetch_array(MYSQLI_ASSOC)){
  
   ?>
   
   
   <center>
            <table width="900px" height="50px" bgcolor="" border="1">
            
            
            <tr><font size=5  color=black><?php echo "USN : ".$row["usn"]; ?></font></tr>
            
            <tr><td> <center>   <?php echo "NAME : ".$row["name"]; ?></center></td>
                <td><center><?php echo "SEMESTER : ".$row["sem"]; ?></center></td>
                <td><center><?php echo "BATCH NUMBER : ".$row["batch"]; ?></center></td>
                <td>  <center> <?php echo "DOB : ".$row["dob"]; ?></center></td></tr></table>
                <br>
               <br>
              
              <table width="900px" height="50px" bgcolor="" border="1">
             <tr>
             <td width="40%">  <center><?php echo "SEX : ".$row["sex"]; ?><br><br></center></td>
             <td>  <center> <?php echo "E-MAIL ID : ".$row["e_id"]; ?><br><br><center></td></tr>
              <tr> <td width="40%"><center> <?php echo "CONTACT NUMBER : ".$row["phone"]; ?><br><br>
              <center></td>
               
             <td>  <center> <?php echo "ADDRESS : ".$row["address"]; ?><br><br><center></td> </tr> 
          </table>
              
              <br><br>
              <font color=black>Admission details</font>
              <br>
              <table width="900px" height="50px" bgcolor="" border="1">
               
               <tr>  <td> <center> <?php echo "YEAR OF ADMISSION";  ?><br><br></td>
              <td><center>  <?php echo " ADMISSION THROUGH" ?><br><br></td>
              <td> <center> <?php echo " RANK "; ?><br><br></td></tr>
               <br>
               
               <br>
               <tr>
               <td><center>  <?php echo $row["yoa"]; ?><br><br></center></td>
               <td> <center><?php echo $row["adm_type"]; ?><br><br></center></td>
              <td> <center> <?php echo $row["rank"]; ?><br><br></center></td></tr>
              </table>
              <br>
              <br>
              
               <br>
               <font color=black>Parents details</font>
               <br><br>
               <table width="900px" height="50px" bgcolor="" border="1">
               
               <tr>  <td> <center> <?php echo "NAME";  ?><br><br></td>
              <td><center>  <?php echo " E-MAIL ID "; ?><br><br></td>
              <td> <center> <?php echo " CONTACT NUMBER "; ?><br><br></td></tr>
               <br>
               <br>
            <tr> <td width="35%">  <?php echo "FATHER :  "; ?><center><?php echo $row["f_name"]; ?><br><br></center></td>
              <td width="35%"><center>  <?php echo $row["f_id"]; ?><br><br></center></td>
              <td> <center> <?php echo $row["f_no"]; ?><br><br></center></td></tr>
              
       		<tr><td width="35%"><?php echo "MOTHER :  "; ?><center><?php echo $row["m_name"]; ?><br><br></center></td>
              <td width="35%"> <center> <?php echo $row["m_id"]; ?><br><br></center></td>
              <td> <center> <?php echo $row["m_no"]; ?><br><br></center></td></tr>
              </table>
              
             </center>
   
   <?php
}}
echo "</table>";
mysqli_close($con);
?>
</body>
</html>
