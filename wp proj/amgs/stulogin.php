<?php
    
    include "navigation.php";
?>

<html>
<head>
    <title>Login</title>
</head>
<body>
    <div id="wrapper">
        <div id="page-wrapper">
            <div class="container-fluid">
                
                <!-- Page Heading -->
                    <div class="row">
                    
                        <h1 class="page-header">
                          Student  Login
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="home_redirect.php">Home</a>
                            </li>
                             <li class="active">
                                <i class="fa fa-file"></i> Login
                            </li
                        </ol>
                    </div>
                
                <!-- /.row -->
            
                
                    <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Enter your credentials below:</h3>
                            </div>
                            <div class="panel-body">
                                <div class="form-group">
                                    <form method="post" action="validate.php">
                                        <input type="text" class="form-control" placeholder="Username" name="uname" required>
                                </div>
                               
                                <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Password" name="pass" required>
                                </div>
                                    
                               
                                <div class="form-group">
                                <button class="btn btn-default" name="check" >Submit</button>
                                </div>
                                    </form>
                            </div>
                              
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

</html><!--End of html doc-->
        
