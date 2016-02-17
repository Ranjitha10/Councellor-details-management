<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">
    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <!-- jQuery -->
</head>
<script>
function startTime() {
    var today = new Date();
    var h = today.getHours();
    var m = today.getMinutes();
    var s = today.getSeconds();
    m = checkTime(m);
    s = checkTime(s);
    document.getElementById('txt').innerHTML =
    h + ":" + m + ":" + s;
    var t = setTimeout(startTime, 500);
}
function checkTime(i) {
    if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
    return i;
}
</script>
<!--End of all CSS includes-->    
<body onload="startTime()">
    <div id="wrapper">
		<!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Attendance and Marks Generator</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
               <li class="dropdown">
 <a class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-clock-o" id="txt"></i>
                </li>
            </ul>
            
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="">
                        <a href="index.php"><i class="fa fa-fw fa-home"></i>Home</a>
                    </li>
                                        <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#view"><i class="fa fa-fw fa-desktop"></i> View Records  <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="view" class="collapse">
                            <li>
                                <a href="try.php"> Student  Records</a>
                            </li>
                            <li>
                                <a href="internals1.php">Subject(test 1) records</a>
                            </li>
                            <li>
                                <a href="internals2.php">Subject(test 2) records</a>
                            </li>
                            <li>
                                <a href="internal3.php">Subject(test 3) records</a>
                            </li>
                                 </ul>
                    </li>
                    
                    
                                             <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#xyz"><i class="fa fa-fw fa-book"></i>  Modify Records <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="xyz" class="collapse">
                            <li>
                                <a href="edit.php">Students Records</a>
                            </li>
                           
                            
                            <li>
                                <a href="editparent.php">Parent  Details</a>
                            </li>
                       
                                                       
                        </ul>
                    </li>
                            
                            <li>
                        <a href="reports.php" ><i class="fa fa-bar-chart-o" ></i> Statistics</a>
                    </li>
                     <li>
                        <a href="mail.php" ><i class="fa fa-fw fa-envelope" ></i>Send Email</a>
                    </li>
                    <li>
                        <a href="phone.php" ><i class="fa fa-fw fa-mobile"></i> Send SMS</a>
                    </li>
                     <li>
                        <a href="test1.php" ><i class="fa fa-fw fa-upload"></i> Import Database</a>
                    </li>
                    <li>
                        <a href="1 (1).php" ><i class="fa fa-fw fa-upload"></i> Export Database</a>
                    </li>

                    <!-- Login power choices to be displayed only if logged in -->
                    
                                    
                   <li>
                        <a href="logout.php"><i class="fa fa-fw fa-sign-out"></i>Logout</a>
                    </li>
                                
                   </ul> 
            </div>
            <!-- /.navbar-collapse -->
        </nav>
         <!-- End of Navigation -->
    </div>
    
     </body>
<div class="copyright" align="center" >
                        2015 &copy; Designed and developed by department of ISE.
                    </div>
</html>
