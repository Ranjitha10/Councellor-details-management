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
                            Subject Records
                        </h1>
                        <ol class="breadcrumb">
                             <li>
                                <i class="fa fa-file"></i>  <a href="internals1.php">First Internals</a>
                            </li>
                            <li>
                                <i class="fa fa-upload"></i>  <a href="internals2.php">Second Internlas</a>
                            </li>
                             <li>
                                <i class="fa fa-upload"></i>  <a href="internal3.php">Third Internlas</a>
                            </li>
                                

                        </ol>
                    </div>
                </div>
                       
                
                                                                  
                                <div class="table-responsive">
                                <table class="table table-hover">
                                    
                                <thead>
                                       <tr>
                            <th>USN</th>                                 
                                                    <th>MOB</th>                                 
                                                        <th>Software Engg</th>
                    <th>CNS</th>
                    <th>DBMS</th>
                    <th>Elective C</th>
                    <th>Elective D</th>
                    
                      
                                    </tr>
                                
                                </thead>
                               
                                
                                <?php
                    
                          //connect to database
$con=mysqli_connect("localhost","root","","amgs");

  // get results from database
  $result = mysqli_query($con,"SELECT * FROM internal2");
                        while($row = mysqli_fetch_array( $result ))
                                {
                                        
                                  echo
                                  
                                  
                          
                                      
                                  
                                           "<tr>
                                                        <td>  {$row['USN']} </td>
                      <td>   {$row['Management and Organisational Behaviour']}  </td>  
                    <td>   {$row['Software Engineering']}  </td>
                    <td>    {$row['Computer Networks and Security']} </td>
                     <td>   {$row['Database Management Systems']}  </td>
                                 <td>  {$row['electivec']}  </td>
                         <td>   {$row['electived']}  </td>
                        
                         
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
