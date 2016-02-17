<?php 
        include "navigation.php"; 
?> 
<head> 
   <title>Dept of ISE</title> 
</head> 
 
 
<body> 
    <div id="wrapper"> 
        <div id="page-wrapper"> 
            <div class="container-fluid"> 
                
            
                <!-- PHP script to insert a new class and sectio nto database --> 
                <!-- Page Heading --> 
                <div class="row"> 
                    <div class="col-lg-12"> 
                        <h1 class="page-header"> 
                            Edit Student Records 
                        </h1> 
                        
                    </div> 
                </div> 
                <!-- /.row --> 
 
                 
                <div class="panel panel-default"> 
                             
                            <div class="panel-body"> 
 <?php $con=mysqli_connect("localhost","root","","amgs"); 
 
    // get results from database 
    $result = mysqli_query($con,"SELECT * FROM student");  
     
         
    // display data in table 
    echo "<div class='table-responsive'>"; 
                                 
    echo "<p><b>Edit Student Records</b>"; 
    echo "<table  class='table table-hover'>"; 
    echo "<tr> <th>name</th> <th>USN</th> <th>gender</th>  <th>email_id</th> <th>address</th> <th>year</th> <th>sem</th> <th>ph_no</th><th></th> </tr>"; 
 
    // loop through results of database query, displaying them in the table 
    while($row = mysqli_fetch_array( $result )) { 
         
        // echo out the contents of each row into a table 
        echo "<tr>"; 
        echo '<td>' . $row['name'] . '</td>'; 
        echo '<td>' . $row['USN'] . '</td>'; 
        echo '<td>' . $row['gender'] . '</td>'; 
        echo '<td>' . $row['email_id'] . '</td>'; 
        echo '<td>' . $row['address'] . '</td>'; 
        echo '<td>' . $row['year'] . '</td>'; 
        echo '<td>' . $row['sem'] . '</td>'; 
        echo '<td>' . $row['ph_no'] . '</td>'; 
         echo ("<td><a href=\"edit_form.php?id=$row[USN]\">Edit</a></td></tr>"); 
 
      } 
       
  
 
    // close table> 
    echo "</table>"; 
    echo "</div>"; 
?>     
                            </div>   
               </div> 
 
            </div> 
            <!-- /.container-fluid --> 
 
        </div> 
        <!-- /#page-wrapper --> 
 
    </div> 
    <!-- /#wrapper --> 
 
    <!-- jQuery --> 
    <script src="js/jquery.js"></script> 
 
    <script src="js/bootstrap.min.js"></script> 
 
</body> 
 
</html>