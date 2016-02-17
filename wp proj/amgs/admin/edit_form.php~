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
      $order = "SELECT * FROM student WHERE USN='$id'";
      $result = mysqli_query($con,$order);
      
      
      
      
      $row = mysqli_fetch_array($result);
      ?>
<table border=1>
  <tr>
    <td align=center>Edit Student's USN="<?php echo $id;?>"</td>
  </tr>
  <tr>
    <td>
      <table>
     
      <form method="post" action="edit_data.php">
      <input type="hidden" name="USN" value= "<?php echo $row['USN']; ?>"
        <tr>        
          <td>Name</td>
          <td>
            <input type="text" name="name" value="<?php echo $row['name'] ?>"
        size="20" ;
          </td>
        </tr>
        <tr>
          <td>gender</td> <td>
            <input type="text" name="gender" size="40" 
          value="<?php echo $row['gender'] ?>"
          </td>
        </tr>
         <tr>
          <td>email_id</td>
          <td>
            <input type="text" name="email_id" size="40" 
          value="<?php echo $row['email_id'] ?>"
          </td>
        </tr>
        <tr>
          <td>Address</td>
          <td>
            <input type="text" name="address" size="40" 
          value="<?php echo $row['address'] ?>"
          </td>
        </tr>
        <tr>
          <td>year</td>
          <td>
            <input type="text" name="year" size="40" 
          value="<?php echo $row['year'] ?>"
          </td>
        </tr>
        <tr> 
          <td>sem</td>
          <td>
            <input type="text" name="sem" size="40" 
          value="<?php echo $row['sem'] ?>"
          </td>
        </tr>
        <tr>
           <td>ph_no</td>
          <td>
            <input type="text" name="ph_no" size="40" 
          value="<?php echo $row['ph_no'] ?>"
          </td>
        </tr>
          <td align="right">
            <input type="submit" name="submit value" value="Edit" action="edit_data.php">
          </td>
        </tr>
        
        </tr>
        <tr>
      </form>
      </table>
    </td>
  </tr>
</table>
<p><a href="modwhich.php">Go Back</a></p>

</body>
</html>
