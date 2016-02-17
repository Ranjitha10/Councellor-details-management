<?php
    include "navigation.php";
?>
<html lang="en">
<head>
    <title> Department of ISE </title>
</head>


<body>
    <div id="wrapper">
        <div id="page-wrapper">
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            View all Student Records
                        </h1>
                                     </div>
                                     
                                                                  
                                <div class="table-responsive">
                                <table class="table table-hover">
                                    
                                     <thead>
                                    <tr>
                                                             
                                    <th>name</th>
                                     <th>USN</th>
                                      <th>gender</th>  
                                      <th>email_id</th> 
                                      <th>address</th>
                                       <th>year</th> 
                                       <th>sem</th> 
                                       <th>ph_no</th>
                                       <th>password</th>
                                    </tr>                                
                                </thead>
                               
                                
                                <?php
                    
                          //connect to database
$con=mysqli_connect("localhost","root","","amgs");

  // get results from database
  $result = mysqli_query($con,"SELECT * FROM student");
                        while($row = mysqli_fetch_array( $result ))
                                {
                                 	
                                  echo
    
                                           "<tr>
                        <td>  {$row['name']} </td>
                      <td>   {$row['USN']}  </td>  
                    <td>   {$row['gender']}  </td>
                    <td>    {$row['email_id']} </td>
                     <td>   {$row['address']}  </td>
                                 <td>  {$row['year']}  </td>
                         <td>   {$row['sem']}  </td>
                          <td>   {$row['ph_no']}  </td>
                           <td>   {$row['password']}  </td>
                         
                         </tr>";
                                  
                                    }
                                    ?>
                            
                                            </table>
                                      </div>
                                <?php
                              
                        
                        
                        mysqli_close($con); 
            
                   ?>
                

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>
</html>
