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
      $order = "SELECT * FROM parent WHERE name='$id'";
      $result = mysqli_query($con,$order);
      
      
      
      
      $row = mysqli_fetch_array($result);
      ?>
<table border=1>
  <tr>
    <td align=center>Edit parent Data     <tr>  <br> Name="<?php echo $id;?>"</tr></td>
  </tr>
  <tr>
    <td>
      <table>
     
      <form method="post" action="editparentdata.php">
           
          <input type="hidden" name="name" value= "<?php echo $id;?>"
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
           <td>ph_no</td>
          <td>
            <input type="text" name="ph_no" size="40" 
          value="<?php echo $row['ph_no'] ?>"
          </td>
        </tr>
          <td align="right">
            <input type="submit" name="post value" value="Edit" action="editparentdata.php">
          </td>
        </tr>
        
        </tr>
        <tr>
      </form>
      </table>
    </td>
  </tr>
</table>
<p><a href="editparent.php">Go Back</a></p>

</body>
</html>
