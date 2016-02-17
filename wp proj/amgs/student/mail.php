<?php
        include "navigation.php";
        /* session_start();php $no1= rand(1,20);$no2 =rand(1,20);echo "$no1 + $no2 = ?";
                        $_SESSION["nos1"]=$no1;
                        $_SESSION["nos2"]=$no2;*/ 
?>
<head>
   <title>Dept of ISE</title>
</head>

<body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
    <div id="wrapper">
        <div id="page-wrapper">
            <div class="container-fluid">
               
           
                <!-- PHP script to insert a new class and sectio nto database -->
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Send Mail
                        </h1>
                    </div>
                </div>

                <form class="form-horizontal" role="form" method="post" action="mail_send.php">
                
                  				<?php 
					$servername = "localhost";
									$username = "root";
									$password = "1234";
									$dbname = "amgs";

							$conn = mysqli_connect($servername, $username, $password, $dbname);
		
							if (!$conn) {
							die("Connection failed: " . mysqli_connect_error());
						}
					$sql = "SELECT * FROM parent";
					$result = mysqli_query($conn, $sql);
					?>
					<div class="form-group">
					<label for="name" class="col-sm-2 control-label"><i class="fa fa-calendar-o"> EmailId</i></label>
					<select name ="pnames">
					
					<?php 
						while($row = mysqli_fetch_assoc($result)) 
						{
					?>
					
					
					<option value="$row['email_id']"> <?php echo  $row['email_id']; ?> </option>
					
					
				<?php }
				?>
				</select>
				</div>
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Subject</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="name" name="name" placeholder="" value="<?php echo htmlspecialchars($_POST['name']); ?>">
                            <?php echo "<p class='text-danger'>$errName</p>";?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="message" class="col-sm-2 control-label">Message</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" rows="4" name="message"><?php echo htmlspecialchars($_POST['message']);?></textarea>
                            <?php echo "<p class='text-danger'>$errMessage</p>";?>
                            
                
                        </div>
                        
                        
                        
                           <div class="form-group">
                        <label for="human" class="col-sm-2 control-label"> 2 + 3 ?</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="human"  name="human" placeholder="Your Answer">
                            <?php echo "<p class='text-danger'>$errHuman</p>";?>
                        </div>
                    </div>
                    </div>
                    	 <div class="form-group">
                        <label for="attachment" class="col-sm-2 control-label">  <i class="fa fa-paperclip">Attachment</i></label>
                        <div class="col-sm-10">
                             <input type="file" name="file" id="a" required/>
							
                        </div>
              	<br> <br>
                    <div class="form-group">
                        <div class="col-sm-10 col-sm-offset-2">
                            <input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-10 col-sm-offset-2">
                            <?php echo $result; ?>    
                        </div>
                    </div>
                </form> 
            </div>
        </div>
    </div>

     <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</body>
