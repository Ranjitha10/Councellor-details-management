<?php
	
    include "navigation.php";

 $con=mysqli_connect("localhost","root","root","test");
?>

<html lang="en">

<head>
    <title>Upload</title>
    
</head>

<body>
    <div id="wrapper">
        <div id="page-wrapper">
            <div class="container-fluid">
</br>
</br>
                <!-- Page Heading -->
                <div class="row" align="center">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Upload Data
                        </h1>
                                        
                    </div>
                </div>
                <!-- /.row -->

              

                <form method="post" name="loginform" action="test2.php" enctype="multipart/form-data">
                <div class="panel panel-default">
                            
                            <div class="panel-body" align="center">
                                                              
                                <div class="form-group">
                                    <h3>Select a file :</h3> </br>
                                </br>
                                    <input type="file" name = "file" id = "file">
                                </div>
                                </br>

                               <!-- <button type="submit" class="btn btn-default">Submit</button> -->
                                  <button type="submit" class="btn btn-primary">Import</button>

                            </div>
                        </form>
                </div>
                </form>
                

            </div>
            <!-- /.container-fluid -->

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

