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
                <a class="navbar-brand" href="index.php">Antendace and Marks Generator</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
               <li class="dropdown">
 <a class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-clock-o" id="txt"></i>
                </li>
            </ul>
            
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
         <div>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="">
                        <a href="index.php"><i class="fa fa-fw fa-home"></i>Home</a>
                    </li>
                                        <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#view"><i class="fa fa-fw fa-desktop"></i> REPORT  <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="view" class="collapse">
                            <li>
                                <a href="report.php"> FIRST INTERNAL REPORT</a>
                            </li>
                            <li>
                                <a href="report2.php">SECOND INTERNAL REPORT</a>
                            </li>
                             <li>
                                <a href="report3.php"> THIRD INTERNAL REPORT</a>
                            </li>
                                 </ul>
                    </li
                  
                      <li>
                        <a href="logout.php"><i class="fa fa-fw fa-sign-out"></i>Logout</a>
                    </li                 
                     <li>
                        <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="">
                        
                    </li>
                            
                            </div>
                    <!-- Login power choices to be displayed only if logged in -->
                    
                                    
                   </div>
                                
                   </ul> 
            </div>

            <!-- /.navbar-collapse -->
        </nav>
         <!-- End of Navigation -->
    </div>
    
     </body>
</html>
