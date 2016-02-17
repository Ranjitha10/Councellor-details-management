<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" 
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Form Edit Data</title>
</head>

<body>
   <?php
      $con=mysqli_connect("localhost","root","root","amgs");
      $id=$_GET['id'];



//print_r($row);
      $order = "SELECT * FROM internal1 WHERE USN='$id'";
      $result = mysqli_query($con,$order);
      
      
      
      
      $row = mysqli_fetch_array($result);
      ?>
<table border=1>
  <tr>
    <td align=center>Edit marks of USN="<?php echo $id;?>"</td>
  </tr>
  <tr>
    <td>
      <table>
     
      <form method="post" action="edit_data.php">
      <input type="hidden" name="USN" value= "<?php echo $row['USN']; ?>"
        <tr>        
          <td>MOB</td>
          <td>
       <input type="text" name="Management_and_Organisational_Behaviour" value="<?php echo $row['Management_and_Organisational_Behaviour'] ?>"
        size="20" ;
          </td>
        </tr>
        <tr>
          <td>SE</td> <td>
            <input type="text" name="Software Engineering" size="40" 
          value="<?php echo $row['Software Engineering'] ?>"
          </td>
        </tr>
         <tr>
          <td>CNS</td>
          <td>
            <input type="text" name="Computer Networks and Security" size="40" 
          value="<?php echo $row['Computer Networks and Security'] ?>"
          </td>
        </tr>
        <tr>
          <td>DBMS</td>
          <td>
            <input type="text" name="Database Management Systems" size="40" 
          value="<?php echo $row['Database Management Systems'] ?>"
          </td>
        </tr>
        <tr>
          <td>electivec</td>
          <td>
            <input type="text" name="electivec" size="40" 
          value="<?php echo $row['electivec'] ?>"
          </td>
        </tr>
        <tr> 
          <td>electived</td>
          <td>
            <input type="text" name="electived" size="40" 
          value="<?php echo $row['electived'] ?>"
          </td>
        </tr>
       <!-- <tr>
           <td>ph_no</td>
          <td>
            <input type="text" name="ph_no" size="40" 
          value="<?php echo $row['ph_no'] ?>"
          </td>
        </tr> -->
          <td align="right">
            <input type="submit" name="submit value" value="Edit" action="edit_data_marks.php">
          </td>
        </tr>
        
        </tr>
        <tr>
      </form>
      </table>
    </td>
  </tr>
</table>
<p><a href="internals1.php">Go Back</a></p>

</body>
</html>
