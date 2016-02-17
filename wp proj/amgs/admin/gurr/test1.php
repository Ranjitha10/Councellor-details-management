<?php
 $con=mysqli_connect("localhost","root","","test");
?>

<html lang="en">

<head>
    <title>Upload</title>
</head>

<body>
    <div id="wrapper">
        <div id="page-wrapper">
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Upload
                        </h1>
                        
                    </div>
                </div>
                <!-- /.row -->

              

                <form method="post" name="loginform" action="test2.php" enctype="multipart/form-data">
                <div class="panel panel-default">
                            
                            <div class="panel-body">
                                                              
                                <div class="form-group">
                                    <label>Select a file :</label>
                                    <input type="file" name = "file" id = "file">
                                </div>
                                

                                <button type="submit" class="btn btn-default">Submit</button>
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

