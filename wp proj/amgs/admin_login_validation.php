<?php
ob_start();
session_start();
//required for start of every session

$user=$_POST['uname'];
$pass=$_POST['pass'];


//required values are in the user and pass variables



//connection with db established


		if($user =="admin" && $pass=="1234")
		{
			echo"You are a validated user.";
			session_regenerate_id();
			
			$_SESSION['sess_username'] = "admin";
			session_write_close();
			header('Refresh:0,url= admin/index.php');
		}//redirect to index for successful login
			else
			{
			   echo "<script> alert(\"The username or password you entered is incorrect...Please Try Again\"); </script>";
	 header('Refresh:1,url= adminlogin.php');
			}//redirect to login for failed login
	
 

	




?>
