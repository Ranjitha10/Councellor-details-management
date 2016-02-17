<?php
		  include "navigation.php";
?>
      
<head>
   <title>AMGS</title>

</head>

<body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
    <div id="wrapper">
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                        MAIL
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="home_redirect.php">Home</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-fw fa-envelope-o"></i>Mail</a>
                            </li>
                        </ol>
                    </div>
                </div>
               
           
                <!-- PHP script to insert a new class and sectio nto database -->
                <!-- Page Heading -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Send Mail Notifications</h3>
                    </div>
                    <div class="panel-body">
                <form class="form-horizontal" role="form" method="post" action="mail_send.php">
                  <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">To</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="to" name="to" required>
                        </div>
                    </div>
               
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Subject</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="message" class="col-sm-2 control-label">Message</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" rows="4" name="message" required></textarea>
                        </div>
                    </div>
					<!-- <div class="form-group">
                        <label for="attachment" class="col-sm-2 control-label">  <i class="fa fa-paperclip">Attachment</i></label>
                        <div class="col-sm-10">
                             <input type="file" name="file" id="a" />
							
                        </div> -->
                    
                    <div class="form-group">
                        <div class="col-sm-10 col-sm-offset-2">
                            <input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-10 col-sm-offset-2">
                        </div>
                    </div>
                </form> 
            </div>
        </div>
    </div>
    </div>
    </div>
     <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</body>
