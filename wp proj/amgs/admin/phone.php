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
                            Send SMS
                        </h1>
                       
                    </div>
                </div>
                <!-- /.row -->

                
                <div class="panel panel-default">
                            
                            <div class="panel-body">
                                <form action = "example.php" method = "post">
                             <table border="1">
<tr><td>YOUR MOBILE NO:<input type="text" name="fromno" size="10" required></td></tr>
<tr><td>PASSWORD:<input type="password" name="pass" required></td></tr>
<tr><td>RECEIVER MOBILE NUMBER:<input type="text" name="tono" size="10" required></td></tr>
<tr> <td><textarea name="message" rows="10" cols="40" required> MESSAGE:</textarea> </td> </tr>
<tr><td><input type="submit" value="Send"></td></tr>
</table>
                                </form>      
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

